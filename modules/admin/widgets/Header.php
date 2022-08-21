<?php
namespace app\modules\admin\widgets;

use app\models\User;
use Yii;

class Header extends \yii\base\Widget
{
    public function run()
    {
        $currentUser = User::findOne(Yii::$app->user->getId());
        return $this->render('header',compact('currentUser'));
    }
}