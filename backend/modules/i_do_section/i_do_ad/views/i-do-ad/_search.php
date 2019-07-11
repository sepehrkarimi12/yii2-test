<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\i_do_section\i_do_ad\models\searchModels\IDoAdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ido-ad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'city_range_id') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'desc') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'org_pic') ?>

    <?php // echo $form->field($model, 'pic_counts') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'chat') ?>

    <?php // echo $form->field($model, 'expired') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'published_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
