<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_created_year\models\CarCreatedYear */

$this->title = 'Update Car Created Year: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Car Created Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-created-year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
