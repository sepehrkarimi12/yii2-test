<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\office_sell\models\searchModels\OfficeSellSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="office-sell-search">

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

    <?php // echo $form->field($model, 'room_count_id') ?>

    <?php // echo $form->field($model, 'created_year_id') ?>

    <?php // echo $form->field($model, 'deed') ?>

    <?php // echo $form->field($model, 'national_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
