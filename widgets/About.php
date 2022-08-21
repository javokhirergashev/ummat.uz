<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class About extends Widget
{
    public function run()
    {
        return $this->render("about");
    }
}