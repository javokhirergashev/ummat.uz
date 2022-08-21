<?php
//echo $model->getAvatarImage();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */

?>

                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'options' => [
                            'class' => 'not-validated',
                            'enctype' => 'multipart/form-data'
                        ]
                    ]
                ]); ?>
<div class="card  mx-auto"  style="margin-bottom: 10px">
    <div class="card-body p-4 border rounded">
        <div class="row">
            <div class="col-7">
                <?= $form->field($model, 'username')->textInput(['maxlength' => true])?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'status')->textInput() ?>
            </div>
            <div class="col-5">
                <div class="box">
                    <div class="js--image-preview " style="background-image: url(<?=$model->getAvatarImage()?>)"></div>
                        <div class="upload-options">
                            <label class="btn-light">
    <!--                            <input type="file" class="image-upload btn-light" accept="image/*" />-->
                                    <?= $form->field($model, 'avatar')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        <div class="form-group" style="margin-top: 10px">
            <?= Html::submitButton('Save', ['class' => 'btn btn-light']) ?>
        </div>
    </div>
    </div>
</div>





    <?php ActiveForm::end(); ?>


