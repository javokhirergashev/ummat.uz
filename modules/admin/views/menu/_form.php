<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
   <div class="card" style="margin-bottom: 10px">
       <div class="card-body">
            <div class="row">
                <div class="col-7">
                    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'position')->textInput()->dropDownList(Yii::$app->params['menu_positions']) ?>
                </div>
                <div class="col-5">
                    <?= $form->field($model, 'order_by')->textInput() ?>

                    <?= $form->field($model, 'parent')->textInput()->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Menu::find()->where(['parent'=>null])->all(),'id','name'),[
                         'prompt' => 'main'
                    ]) ?>

                    <?= $form->field($model, 'status')->textInput() ?>
                </div>
            </div>
       </div>
   </div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
