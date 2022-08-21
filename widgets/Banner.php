<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Banner extends Widget
{
    public function run()
    {
        return $this->render("banner");
    }
}