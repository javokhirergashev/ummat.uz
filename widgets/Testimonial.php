<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Testimonial extends Widget
{
    public function run()
    {
        return $this->render('testimonial');
    }
}