<?php

use backend\modules\ad_advertiser\models\AdAdvertiser;
use backend\modules\city\models\City;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\estate_agensy\models\EstateAgensy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estate-agensy-form">

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


    <?= $form->field($model, 'ad_advertiser_id')
        ->radioList(AdAdvertiser::getAdAdvertisersByCategory($ad->cat_id))
        ->label('آگهی دهنده');
    ?>

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($ad, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($ad, 'immediate')->checkbox() ?>

    <?= $form->field($ad, 'chat')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
Yii::$app->view->renderFile('@common/city_and_city_range/cityAndCityRangeForForms.php');
?>