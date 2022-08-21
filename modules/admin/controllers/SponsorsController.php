<?php

namespace app\modules\admin\controllers;

use app\models\Sponsors;
use app\models\SponsorsSearch;
use app\models\StaticFunctions;
use app\modules\admin\controllers\DefaultController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SponsorsController implements the CRUD actions for Sponsors model.
 */
class SponsorsController extends DefaultController
{
    /**
     * @inheritDoc
     */

    /**
     * Lists all Sponsors models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SponsorsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sponsors model.
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
     * Creates a new Sponsors model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sponsors();

        if ($this->request->isPost) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }

            if ($model->load($this->request->post())) {
                if ($model->save()) {

                    $model->images = UploadedFile::getInstance($model,'images');
                    $model->images = StaticFunctions::saveImage('sponsors',$model->id,$model->images);

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
     * Updates an existing Sponsors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->images;

        if ($this->request->isPost && $model->load($this->request->post()) ) {

            $model->images = UploadedFile::getInstance($model,'images');

            if (!empty($model->images)){
                $model->images = StaticFunctions::saveImage('sponsors',$model->id,$model->images);
                StaticFunctions::deleteImage('sponsors',$model,$oldImage);
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
     * Deletes an existing Sponsors model.
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
     * Finds the Sponsors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Sponsors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sponsors::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
