<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_color\models\CarColor */

$this->title = 'Update Car Color: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Car Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
