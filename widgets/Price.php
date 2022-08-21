<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Price extends Widget
{
    public function run()
    {
        return $this->render('package');
    }
}