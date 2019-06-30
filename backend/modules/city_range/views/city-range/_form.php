<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use backend\modules\city\models\City;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\city_range\models\CityRange */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-range-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'city_id')->widget(Select2::classname(), [
            'data' => City::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a city...'],
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
