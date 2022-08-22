<?php

namespace app\widgets;

use app\models\Testimonials;
use yii\bootstrap4\Widget;

class Testimonial extends Widget
{
    public function run()
    {
        $models = Testimonials::find()->where(["status"=>1])->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('testimonial', compact("models"));
    }
}