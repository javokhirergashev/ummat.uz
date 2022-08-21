<?php

use app\models\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sponsors-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card  mx-auto"  style="margin-bottom: 10px">
        <div class="card-body p-4 border rounded">
            <div class="row">
                <div class="col-7">

                    <div class="box">
                        <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('sponsors',$model->id,$model->images)?>)"></div>
                        <div class="upload-options">
                            <label class="btn-light">
                                <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

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
