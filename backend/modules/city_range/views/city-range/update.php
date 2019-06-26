<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\city_range\models\CityRange */

$this->title = 'Update City Range: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'City Ranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="city-range-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
