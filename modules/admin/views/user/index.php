<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydalanuvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">


        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Boshqaruv/ </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Foydalanuvchilar</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi foydalanuvchi yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
//            'password',
            'auth_key',
            'email:email',
            [
                    'attribute' => 'avatar',
                    'value' => function($data){
                        return "<img src='{$data->getAvatarImage()}' style='max-width: 100px'>";
                    },
                    'format' => 'html'
            ],
            'created_date',
            'updated_date',
            [
                'attribute' => 'creator',
                'value' => function($data){
                    if ($data->creator){
                        return \app\models\User::findOne($data->creator)->username;
                    }else{
                        return 'superadmin';
                    }
                }
            ],
            'status',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Amallar',
                'headerOptions' => ['style' => 'text-align:center'],
                'template' => '{buttons}',
                'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],
                'buttons' => [
                    'buttons' => function ($url, $model) {
                        $controller = Yii::$app->controller->id;
                        $code = <<<BUTTONS
                                <div class="btn-group flex-center">
                                    <a href="/web/admin/{$controller}/update?id={$model->id}" class="btn btn-light"><i class="far fa-edit"></i></a>
                                    <a href="/web/admin/{$controller}/delete?id={$model->id}" id="{$controller}{$model->id}" data-postID="{$model->id}" data-postType="{$controller}" class="btn btn-danger postRemove"><i class="far fa-trash-alt"></i></a>
                                </div>
BUTTONS;
                        return $code;
                    }

                ],

            ],
        ]
    ]); ?>


</div>
