<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\mobile_and_tablet_sim_card\models\searchModels\MobileAndTabletSimCardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobile-and-tablet-sim-card-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad_id') ?>

    <?= $form->field($model, 'sim_card_type_id') ?>

    <?= $form->field($model, 'ad_type_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
