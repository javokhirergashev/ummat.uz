<?php

namespace app\widgets;

use app\models\Contacts;
use yii\bootstrap4\Widget;

class Footer extends Widget
{
    public function run()
    {
        $contacts = Contacts::find()->all();
        return $this->render('footer', compact("contacts"));
    }
}