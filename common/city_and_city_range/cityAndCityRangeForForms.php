<?php
/**
 * this file is for forms in create and update sections
 * use for finding city ranges are related to city
 * and in update section selected city range automaticly
 * @author sepehr
 * you can use this file in your views like this :
 * Yii::$app->view->renderFile('@common/city_and_city_range/cityAndCityRangeForForms.php');
 */

$script = <<< JS
var cityId = $('#ad-city_id').val();
$.get('../../../../backend/web/city_range/city-range/get-ranges-of-city', { city_id : cityId }, function(data){
    var data = $.parseJSON(data);
var cityRangeId =$('#ad-city_range_id').val();
    //remove options of course select
    var select = $('#ad-city_range_id');
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
    
$('#ad-city_id').change(function(){
    var cityId = $(this).val();
    $.get('../../../../backend/web/city_range/city-range/get-ranges-of-city', { city_id : cityId }, function(data){
        var data = $.parseJSON(data);

        //remove options of course select
        var select = $('#ad-city_range_id');
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
