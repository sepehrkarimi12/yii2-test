<?php

use backend\modules\ad_advertiser\models\AdAdvertiser;
use backend\modules\ad_type\models\AdType;
use backend\modules\city\models\City;
use backend\modules\created_year\models\CreatedYear;
use backend\modules\room\models\Room;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\land_sell\models\LandSell */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="land-sell-form">

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

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'ad_type_id')
        ->radioList(AdType::getAdTypesByCategory($ad->cat_id))
        ->label('نوع آگهی');
    ?>

    <?= $form->field($model, 'ad_advertiser_id')
        ->radioList(AdAdvertiser::getAdAdvertisersByCategory($ad->cat_id))
        ->label('آگهی دهنده');
    ?>

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