<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Book extends Widget
{
    public function run()
    {
        return $this->render('book');
    }
}