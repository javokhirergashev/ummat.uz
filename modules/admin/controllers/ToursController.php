<?php

namespace app\modules\admin\controllers;

use app\models\StaticFunctions;
use app\models\Tours;
use app\models\ToursSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ToursController implements the CRUD actions for Tours model.
 */
class ToursController extends DefaultController
{
    /**
     * @inheritDoc
     */


    /**
     * Lists all Tours models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ToursSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tours model.
     * @param int $id ID
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
     * Creates a new Tours model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tours();

        if ($this->request->isPost) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }
            date_default_timezone_set('Asia/Tashkent');
            $model->created_date = date('Y-m-d H:i:s',strtotime($model->created_date));
            $model->updated_date = date('Y-m-d H:i:s');
            if ($model->load($this->request->post())) {
                if ($model->save()) {

                    $model->images = UploadedFile::getInstance($model,'images');
                    $model->images = StaticFunctions::saveImage('tours',$model->id,$model->images);

                    $model->save();

                    return $this->redirect(['index', 'id' => $model->id]);
                }else{
                    debug($model->errors);die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tours model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->images;

        if ($this->request->isPost && $model->load($this->request->post())) {
//            if (!empty(!$model->status)){
//                $model->status = 1;
//            }else{
//                $model->status = 0;
//            }
            date_default_timezone_set('Asia/Tashkent');
            $model->created_date = date('Y-m-d H:i:s',strtotime($model->created_date));
            $model->updated_date = date('Y-m-d H:i:s');

            $model->images = UploadedFile::getInstance($model,'images');

            if (!empty($model->images)){
                $model->images = StaticFunctions::saveImage('tours',$model->id,$model->images);
                StaticFunctions::deleteImage('tours',$model,$oldImage);
            }else{
                $model->images = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                debug($model->errors);die;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tours model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tours model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Tours the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tours::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
