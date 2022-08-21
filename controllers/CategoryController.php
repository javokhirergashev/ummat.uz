<?php
namespace app\controllers;
use app\models\StaticFunctions;

use app\models\Tours;

use app\models\ToursCategory;
class CategoryController extends GeneralController
{
    public function actionView($id)
    {
        $models = Tours::find()->where(['status' => 1,])->all();

        if (empty($models)) {
            $this->redirect('/error/view');
        } else
//            $image = StaticFunctions::getImage('tours',$model->id,$model->images);
            return $this->render('view', compact('models'));
    }
}