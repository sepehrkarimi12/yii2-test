<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_rent\models\ApartmentRent */

$this->title = 'Create Apartment Rent';
$this->params['breadcrumbs'][] = ['label' => 'Apartment Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-rent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
