<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\car_color\models\CarColor */

$this->title = 'Create Car Color';
$this->params['breadcrumbs'][] = ['label' => 'Car Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-color-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
