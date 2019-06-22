<?php

use common\models\Category;
use backend\modules\ad_type\models\AdType;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_ad_type\models\CategoryAdType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-ad-type-form">

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

    <?php
        echo $form->field($model, 'ad_type_id')->widget(Select2::classname(), [
            'data' => AdType::getListForDropDown('id', 'title'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a ad type...'],
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
