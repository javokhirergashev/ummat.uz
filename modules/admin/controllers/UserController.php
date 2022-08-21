<?php

namespace app\modules\admin\controllers;


use app\models\LoginForm;
use app\models\StaticFunctions;
use app\models\User;
use app\models\UserSearch;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;


/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends DefaultController
{

    public function actionTest(){
        echo Yii::$app->security->generatePasswordHash('001'); die();
    }
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_date = date("Y-m-d H:i:s");
            $model->updated_date = date("Y-m-d H:i:s");
            $model->creator = Yii::$app->user->getId();
            $model->generatePassword($model->password);
            if ($model->save()){
                $model->file = UploadedFile::getInstance($model, 'avatar');
                $model->saveAvatarImage();
                $model->avatar = $model->file->baseName . '.' . $model->file->extension;
//                print_r($model->file);die;
//                $model->avatar = $model->saveAvatarImage();
                if ($model->save()){
                    return $this->redirect(['index', 'id' => $model->id]);
                }else {
                    return debug($model->errors);
                }
            }else{
                return debug($model->errors);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->password = "";
        $oldImage = $model->avatar;
        if ($model->load(Yii::$app->request->post())) {
            $model->updated_date = date("Y-m-d H:i:s");
            $model->generatePassword($model->password);

            $model->file = UploadedFile::getInstance($model,'avatar');
            if (!empty($model->file)){
                $model->avatar = $model->saveAvatarImage();
                $model->deleteOldImage($oldImage);
            }else{
                $model->avatar = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                return debug($model->errors);
            }
        }

        $userAvatar = StaticFunctions::getImage('user',$model->id, $model->avatar);

        return $this->render('update', [
            'model' => $model,
            'userAvatar' => $userAvatar
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
