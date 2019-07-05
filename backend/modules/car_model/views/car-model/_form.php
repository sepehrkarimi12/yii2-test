<?php

use kartik\select2\Select2;
use backend\modules\car_brand\models\CarBrand;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_model\models\CarModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'brand_id')->widget(Select2::classname(), [
            'data' => CarBrand::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a car brand...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
