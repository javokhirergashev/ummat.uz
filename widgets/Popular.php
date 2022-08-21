<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Popular extends Widget
{
    public function run()
    {
        return $this->render("popular");
    }
}