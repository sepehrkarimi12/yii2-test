<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_riding\models\VehicleCarRiding */

$this->title = 'خودرو سواری : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="vehicle-car-riding-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
