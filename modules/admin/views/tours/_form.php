<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\StaticFunctions;

/* @var $this yii\web\View */
/* @var $model app\models\Tours */
/* @var $form yii\widgets\ActiveForm */





$js1 = <<<JS
    CKEDITOR.replace( 'tours-body_uz' );
    CKEDITOR.replace( 'tours-body_ru' );
    CKEDITOR.replace( 'tours-body_en' );
JS;
$this->registerJs($js1);
$js2 = <<<JS
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'DD-YY-MM HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
JS;
$this->registerJs($js2);

?>


<!--<div class="col-xl-9 mx-auto" style="margin: auto; align-items: center">-->
<!--    <div class="card">-->
<!--        <div class="card-body">-->
<!--            <div class="p-4 border rounded" style="margin-bottom: 10px">-->

    <?php $form = ActiveForm::begin(); ?>

<div class="card  mx-auto"  style="margin-bottom: 10px">
    <div class="card-body p-4 border rounded">
        <div class="row">
            <div class="col-6">
                <?= $form->field($model, 'title_uz')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'title_ru')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'title_en')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_uz')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_ru')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_en')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'created_date')->textInput(['class'=>'form-control datepicker']) ?>
                <?= $form->field($model, 'body_uz')->textarea(['rows' => 5]) ?>
                <?= $form->field($model, 'body_ru')->textarea(['rows' => 5]) ?>
            </div>
            <div class="col-6">
                <?= $form->field($model, 'body_en')->textarea(['rows' => 5]) ?>
                <div class="box">
                <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('tours',$model->id,$model->images)?>)"></div>
                    <div class="upload-options">
                        <label class="btn-light">
                            <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                        </label>
                    </div>
                </div>

                <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\ToursCategory::find()->all(),'id','name_uz'), [
                    'prompt' => 'Kategoriyani tanlang',
                    'options' => [
                    ]
                ]) ?>


                <?= $form->field($model, 'seen_count')->textInput() ?>
                <?= $form->field($model, 'price')->textInput() ?>
                <?= $form->field($model, 'status')->textInput() ?>
                <?= $form->field($model, 'period')->textInput() ?>
                </div>
            </div>
        </div>
    </div>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


