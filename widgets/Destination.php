<?php

namespace app\widgets;

use app\models\ToursCategory;
use yii\bootstrap4\Widget;
use yii\helpers\Html;


class Destination extends Widget
{
    public function run()
    {
        $models = ToursCategory::find()->where(["status"=>1])->all();
//        debug($models);
        return $this->render('destination', compact("models"));
    }
}