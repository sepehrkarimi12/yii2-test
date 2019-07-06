<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_riding\models\searchModels\VehicleCarRidingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-car-riding-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad_id') ?>

    <?= $form->field($model, 'brand_id') ?>

    <?= $form->field($model, 'color_id') ?>

    <?= $form->field($model, 'ad_type_id') ?>

    <?php // echo $form->field($model, 'created_year_id') ?>

    <?php // echo $form->field($model, 'miles') ?>

    <?php // echo $form->field($model, 'national_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
