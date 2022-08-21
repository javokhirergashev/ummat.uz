<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "Foydalanuvchi ma'lumotlarini o'zgartirish:"   . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Boshqaruv/</a></li>
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin/user'])?>">Foydalanuvchilar/</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Foydalanuvchi ma'lumotlarini o'zgartirish</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
