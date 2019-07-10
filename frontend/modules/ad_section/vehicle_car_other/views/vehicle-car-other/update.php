<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_heavy\models\VehicleCarHeavy */

$this->title = 'خودرو متفرقه : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="vehicle-car-heavy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
