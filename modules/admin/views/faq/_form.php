<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FAQ */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card" style="margin-bottom: 10px">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <?= $form->field($model, 'question_uz')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'question_ru')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'question_en')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'status')->textInput() ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'answer_uz')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'answer_ru')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'answer_en')->textarea(['rows' => 6]) ?>

                </div>
            </div>
        </div>
    </div>
   <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
   </div>
   <?php ActiveForm::end(); ?>
</div>
