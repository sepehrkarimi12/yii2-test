<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_brigade\models\CarBrigade */

$this->title = 'Create Car Brigade';
$this->params['breadcrumbs'][] = ['label' => 'Car Brigades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brigade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
