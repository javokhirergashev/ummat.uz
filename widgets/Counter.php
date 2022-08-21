<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Counter extends Widget
{
    public function run()
    {
        return $this->render('counter');
    }
}