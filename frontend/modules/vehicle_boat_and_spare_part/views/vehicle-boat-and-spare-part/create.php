<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_rent\models\VehicleCarRent */

$this->title = 'قایق و لولزم جانبی';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-car-rent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
