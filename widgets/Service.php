<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Service extends Widget
{
    public function run()
    {
        return $this->render('service');
    }
}