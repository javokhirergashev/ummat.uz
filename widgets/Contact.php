<?php

namespace app\widgets;

use app\models\Contacts;
use app\models\Tours;
use yii\bootstrap4\Widget;

class Contact extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        $contacts = Tours::find()->where(["status"=>1])->orderBy(["id"=>SORT_DESC])->limit(6)->all();
        return $this->render('contact', compact('models', "contacts"));
    }
}