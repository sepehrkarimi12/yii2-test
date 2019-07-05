<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_created_year\models\CarCreatedYear */

$this->title = 'Create Car Created Year';
$this->params['breadcrumbs'][] = ['label' => 'Car Created Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-created-year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
