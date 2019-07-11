<?php

use backend\modules\city\models\City;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\i_do_section\models\IDoAd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ido-ad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'city_id')->widget(Select2::classname(), [
        'data' => City::getListForDropDown('id', 'title'),
        'language' => 'en',
        'options' => ['placeholder' => 'نام شهر ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($model, 'city_range_id')->widget(Select2::classname(), [
        'language' => 'en',
        'options' => ['placeholder' => 'محدوده ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chat')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
var cityId = $('#idoad-city_id').val();
$.get('../../../../backend/web/city_range/city-range/get-ranges-of-city', { city_id : cityId }, function(data){
    var data = $.parseJSON(data);
var cityRangeId =$('#idoad-city_range_id').val();
    //remove options of course select
    var select = $('#idoad-city_range_id');
    $(select)
        .find('option')
        .remove()
        .end()
    ;
    
    
    (select).append("<option value=''>" + 'محدوده ...' + "</option>");
    $.each(data, function( k, v ) {
        if (v['id']==cityRangeId) {
            (select).append("<option value=" + v['id'] + " selected='selected' >" + v['title'] + "</option>");
        } else {
            (select).append("<option value=" + v['id'] + ">" + v['title'] + "</option>");
        }
    });

});
//
    
$('#idoad-city_id').change(function(){
    var cityId = $(this).val();
    $.get('../../../../backend/web/city_range/city-range/get-ranges-of-city', { city_id : cityId }, function(data){
        var data = $.parseJSON(data);

        //remove options of course select
        var select = $('#idoad-city_range_id');
        $(select)
            .find('option')
            .remove()
            .end()
        ;
        
        (select).append("<option value=''>" + 'محدوده ...' + "</option>");
        $.each(data, function( k, v ) {
            (select).append("<option value=" + v['id'] + ">" + v['title'] + "</option>");
        });

    });
});
JS;
$this->registerJS($script);
?>