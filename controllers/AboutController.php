<?php
namespace app\controllers;

class AboutController extends GeneralController
{
    public function actionView()
    {
        $models = \app\models\Contacts::find()->all();
        $sponsors = \app\models\Sponsors::find()->where(['status'=>1])->all();
//        debug($sponsors); die();
//        $image = StaticFunctions::getImage('sponsors',$models->id,$models->images);
        return $this->render('view',compact('models', 'sponsors'));
    }
}