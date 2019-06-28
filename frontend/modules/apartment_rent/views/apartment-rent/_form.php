<?php

use backend\modules\city\models\City;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_rent\models\ApartmentRent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartment-rent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        echo $form->field($ad, 'city_id')->widget(Select2::classname(), [
            'data' => City::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a city...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($ad, 'city_range_id')->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'ad_type_id')->textInput() ?>

    <?= $form->field($model, 'ad_advertiser_id')->textInput() ?>

    <?= $form->field($model, 'deposit')->textInput() ?>

    <?= $form->field($model, 'rent_value')->textInput() ?>

    <?= $form->field($model, 'room_count_id')->textInput() ?>

    <?= $form->field($model, 'created_year_id')->textInput() ?>

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>



    <?= $form->field($ad, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'immediate')->textInput() ?>

    <?= $form->field($ad, 'chat')->textInput() ?>

    <?= $form->field($ad, 'exchange')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
