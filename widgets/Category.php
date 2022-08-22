<?php

namespace app\widgets;

use app\models\ToursCategory;
use yii\bootstrap4\Widget;

class Category extends Widget
{
    public function run()
    {
        $models = ToursCategory::find()->where(["status" => 1])->all();
        return $this->render('category', compact("models"));
    }
}