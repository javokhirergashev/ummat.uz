<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Category extends Widget
{
    public function run()
    {
        return $this->render('category');
    }
}