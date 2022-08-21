<?php

namespace app\controllers;

use app\models\StaticFunctions;

class DestinationController extends GeneralController
{
    public function actionView()
    {
        $models = \app\models\ToursCategory::find()->where(['status'=>1,])->orderBy(['status'=>SORT_ASC])->all();
//        $image = StaticFunctions::getImage('tours',$models->id,$models->images);
        return $this->render('view',compact('models'));
    }
}