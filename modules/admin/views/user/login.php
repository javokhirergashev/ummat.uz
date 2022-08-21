<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="card border-top border-0 border-4 border-white">
    <div class="card-body p-5">
        <div class="card-title text-center"><i class="bx bxs-user-circle text-white font-50"></i>
            <h5 class="mb-0 mt-2 text-white">User Login</h5>
        </div>
        <hr>
<?php
    $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-12 col-form-label mr-lg-12'],
        'inputOptions' => ['class' => 'col-lg-12 form-control'],
        'errorOptions' => ['class' => 'col-lg-12 invalid-feedback'],
    ],
]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"input-group input-group-lg\">{input} {label}</div>\n<div class=\form-label\">{error}</div>",
]) ?>

        <div class="form-group">

                <?= Html::submitButton('Login', ['type' => 'submit', 'class' => 'col-lg-12 btn btn-light btn-lg', 'name' => 'login-button']) ?>

        </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
