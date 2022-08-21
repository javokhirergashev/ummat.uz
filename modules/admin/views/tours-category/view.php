<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ToursCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tours Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->name_uz;
\yii\web\YiiAsset::register($this);
?>
<div class="tours-category-view">

    <h1><?= Html::encode($this->name_uz) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_uz',
            'status',
        ],
    ]) ?>

</div>
