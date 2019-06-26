<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\city_range\models\CityRange */

$this->title = 'Create City Range';
$this->params['breadcrumbs'][] = ['label' => 'City Ranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-range-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
