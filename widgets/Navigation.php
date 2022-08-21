<?php
namespace app\widgets;

use yii\bootstrap4\Widget;

class Navigation extends Widget
{
    public function run()
    {
        return $this->render('navigation');
    }
}