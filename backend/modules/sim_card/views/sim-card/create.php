<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\sim_card\models\SimCard */

$this->title = 'Create Sim Card';
$this->params['breadcrumbs'][] = ['label' => 'Sim Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sim-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
