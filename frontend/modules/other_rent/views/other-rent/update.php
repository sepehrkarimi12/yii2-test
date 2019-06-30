<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\other_rent\models\OtherRent */

$this->title = 'Update Other Rent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Other Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="other-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
