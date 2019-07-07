<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_rent\models\VehicleCarRent */

$this->title = 'قطعات یدکی و لوازم جانبی خودرو : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="vehicle-car-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
