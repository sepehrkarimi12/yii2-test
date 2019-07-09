<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\sim_card\models\SimCard */

$this->title = 'Update Sim Card: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sim Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sim-card-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
