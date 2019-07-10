<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\vehicle_car_heavy\models\VehicleCarHeavy */

$this->title = 'موتورسیکلت و لوازم جانبی';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-car-heavy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
