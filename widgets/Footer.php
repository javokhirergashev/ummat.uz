<?php

namespace app\widgets;

use app\models\Menu;
use yii\bootstrap5\Widget;
use app\models\Contacts;

class Footer extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        $links = Menu::find()->where(["status"=>1])->orderBy(["order_by"=>SORT_ASC])->all();
        return $this->render('footer', compact("models", "links"));
    }
}