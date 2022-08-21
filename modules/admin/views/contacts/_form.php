<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card" style="margin-bottom: 10px">
        <div class="card-body">
            <div class="row">

                <div class="col-7">
                    <?= $form->field($model, 'addres')->textarea(['rows' => 4]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'first_phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'second_phone')->textInput(['maxlength' => true]) ?>

                </div>

                <div class="col-5">

                    <?= $form->field($model, 'third_phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'tweetter_link')->textInput(['maxlength' => true]) ?>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
