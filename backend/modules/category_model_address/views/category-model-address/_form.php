<?php

use common\models\Category;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_model_address\models\CategoryModelAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-model-address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        echo $form->field($model, 'cat_id')->widget(Select2::classname(), [
            'data' => Category::getLeafsAsDropDown(),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a category...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'model_address')
        ->textInput(
                [
                    'maxlength' => true,
                    'placeholder' => 'ex : backend\modules\module_name\models\ModelName'
                ]
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
