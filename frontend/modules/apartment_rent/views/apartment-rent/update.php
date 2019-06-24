<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_rent\models\ApartmentRent */

$this->title = 'Update Apartment Rent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apartment Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apartment-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
