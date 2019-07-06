<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\city\models\City;
use kartik\select2\Select2;
use backend\modules\ad_type\models\AdType;
use backend\modules\car_brand\models\CarBrand;
use backend\modules\car_color\models\CarColor;
use backend\modules\car_created_year\models\CarCreatedYear;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_riding\models\VehicleCarRiding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-car-riding-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php
    echo $form->field($ad, 'city_id')->widget(Select2::classname(), [
        'data' => City::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'نام شهر ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($ad, 'city_range_id')->widget(Select2::classname(), [
        'language' => 'en',
        'options' => ['placeholder' => 'محدوده ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($model, 'brand_id')->widget(Select2::classname(), [
        'data' => CarBrand::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'محدوده ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($model, 'color_id')->widget(Select2::classname(), [
        'data' => CarColor::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'محدوده ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'ad_type_id')
        ->radioList(AdType::getAdTypesByCategory($ad->cat_id))
        ->label('نوع آگهی');
    ?>

    <?php
    echo $form->field($model, 'created_year_id')->widget(Select2::classname(), [
        'data' => CarCreatedYear::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'محدوده ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'miles')->textInput() ?>

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($ad, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'national_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'immediate')->checkbox() ?>

    <?= $form->field($ad, 'chat')->checkbox() ?>

    <?= $form->field($ad, 'exchange')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
Yii::$app->view->renderFile('@common/city_and_city_range/cityAndCityRangeForForms.php');
?>