<?php

namespace app\widgets;
use yii\bootstrap5\Widget;

use app\models\Menu;
class Header extends Widget
{
    public function run()
    {
        $models = Menu::find()->where(["status"=>1])->orderBy(["order_by"=>SORT_ASC])->all();
        return $this->render('header', compact("models"));
    }
}