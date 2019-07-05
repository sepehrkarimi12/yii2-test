<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\car_model\models\CarModel;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_brigade\models\CarBrigade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-brigade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'model_id')->widget(Select2::classname(), [
            'data' => CarModel::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a car model...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
