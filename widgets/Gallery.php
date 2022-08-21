<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Gallery extends Widget
{
    public function run()
    {
        return $this->render('gallery');
    }
}