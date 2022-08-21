<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Tours extends Widget
{
    public function run()
    {
        return $this->render('tours');
    }
}