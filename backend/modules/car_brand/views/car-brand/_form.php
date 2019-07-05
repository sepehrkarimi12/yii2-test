<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use backend\modules\car_brand\models\CarBrand;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_brand\models\CarBrand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-brand-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        echo $form->field($model, 'parent_id')->widget(Select2::classname(), [
            'data' => CarBrand::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a parent...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
