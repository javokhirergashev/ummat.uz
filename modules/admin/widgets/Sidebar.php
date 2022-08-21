<?php
namespace app\modules\admin\widgets;
class Sidebar extends \yii\base\Widget
{
public function run()
    {
        return $this->render('sidebar');
    }
}