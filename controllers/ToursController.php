<?php

namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Tours;
use app\models\ToursCategory;

class ToursController extends GeneralController
{
    public function actionView()
    {
        $models = Tours::find()->where(['category_id'=>$id])->all();
        $categories = ToursCategory::find()->where(['id'=>$id])->all();
//        var_dump($category);
        if (empty($models && $categories)){
            return $this->redirect('/error/view');
        }else{
//           $image = StaticFunctions::getImage('tours',$model->id,$model->images);
            return $this->render('view',compact('models','categories'));
        }
    }
}