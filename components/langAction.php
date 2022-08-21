<?php

namespace app\components;

use yii\base\Behavior;
use yii\web\Application;

class langAction extends Behavior
{
    public function events()
    {
       return[Application::EVENT_BEFORE_REQUEST=>'lan'];
    }
    public function lan(){
        if (\Yii::$app->session->has("til")){
            \Yii::$app->language=\Yii::$app->session->get("til");
        }
    }
}