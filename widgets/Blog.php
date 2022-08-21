<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Blog extends Widget
{
    public function run()
    {
        return $this->render('blog');
    }
}