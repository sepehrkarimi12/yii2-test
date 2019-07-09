<?php

use backend\modules\ad_type\models\AdType;
use backend\modules\city\models\City;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\mobile_brand\models\MobileBrand;

/* @var $this yii\web\View */
/* @var $model frontend\modules\mobile_and_tablet_mobile\models\MobileAndTabletMobile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobile-and-tablet-mobile-form">

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

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?php
    echo $form->field($model, 'brand_id')->widget(Select2::classname(), [
        'data' => MobileBrand::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'نام شهر ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'ad_type_id')
        ->radioList(AdType::getAdTypesByCategory($ad->cat_id))
        ->label('نوع آگهی');
    ?>

    <?= $form->field($ad, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'exchange')->checkbox() ?>

    <?= $form->field($ad, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'chat')->checkbox() ?>

    <?= $form->field($ad, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'immediate')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
Yii::$app->view->renderFile('@common/city_and_city_range/cityAndCityRangeForForms.php');
?>