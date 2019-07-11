<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\discount_section\models\DiscountCategory;

/* @var $this yii\web\View */
/* @var $model common\models\discount_section\models\DiscountCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discount-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'parent_id')->widget(Select2::classname(), [
        'data' => DiscountCategory::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a parent...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'autofocus' => 'autofocus',]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
