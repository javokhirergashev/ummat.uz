<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsors */

$this->title = 'Yangi hamkor yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Sponsors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Bosh sahifa/</a></li>
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin/sponsors'])?>">Kontaktlar/</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Yangi hamkor qo'shish</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<div class="sponsors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
