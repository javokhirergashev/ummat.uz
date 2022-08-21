<?php

use app\models\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card" style="margin-bottom: 10px">
        <div class="card-body">
            <div class="row">
                <div class="col-7">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>



                    <?= $form->field($model, 'comment_uz')->textarea(['rows' => 4]) ?>
                    <?= $form->field($model, 'comment_ru')->textarea(['rows' => 4]) ?>
                    <?= $form->field($model, 'comment_en')->textarea(['rows' => 4]) ?>


                </div>
                <div class="col-5">
                    <div class="box">
                        <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('testimonials',$model->id,$model->images)?>)"></div>
                        <div class="upload-options">
                            <label class="btn-light">
                                <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                            </label>
                        </div>
                    </div>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'status')->textInput() ?>

                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
