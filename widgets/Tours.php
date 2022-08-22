<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Tours extends Widget
{
    public function run()
    {
        $models = \app\models\Tours::find()->where(['status'=>1])->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('tours',compact('models'));
    }
}