<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\other_rent\models\searchModels\OtherRent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-rent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad_id') ?>

    <?= $form->field($model, 'area') ?>

    <?= $form->field($model, 'ad_type_id') ?>

    <?= $form->field($model, 'ad_advertiser_id') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'rent_value') ?>

    <?php // echo $form->field($model, 'room_count_id') ?>

    <?php // echo $form->field($model, 'created_year_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
