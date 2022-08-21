<?php
namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Tours;

class ToursviewController extends GeneralController
{
    public function actionView($id){
        $model = Tours::findOne($id);
//        var_dump($model);
        if (empty($model)){
            return $this->goBack();
        }else{
            $image = StaticFunctions::getImage('tours',$model->id,$model->images);
            return $this->render('view',compact('model','image'));
        }
    }
}