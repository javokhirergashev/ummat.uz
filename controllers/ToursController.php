<?php
namespace app\controllers;
use app\models\StaticFunctions;

use app\models\Tours;

use app\models\ToursCategory;
class ToursController extends GeneralController
{
    public function actionView()
    {
        $models = Tours::find()->where(['status' => 1])->all();
            return $this->render('view', compact('models'));
    }
}