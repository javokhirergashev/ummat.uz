<?php

namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Tours;
use app\models\ToursCategory;

class CategoryController extends GeneralController
{
    public function actionView($id)
    {
        $models = Tours::find()->where(['category_id'=>$id])->all();
//        debug($models);
        $categories = ToursCategory::find()->where(['id'=>$id])->all();
//        var_dump($categories);
        if (empty($models && $categories)){
            return $this->redirect('/error/view');
        }else{
//           $image = StaticFunctions::getImage('tours',$model->id,$model->images);
            return $this->render('view',compact('models','categories'));
        }
    }
}