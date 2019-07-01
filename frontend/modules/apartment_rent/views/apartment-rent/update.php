<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_rent\models\ApartmentRent */

$this->title = 'اجاره مسکونی (آپارتمان) : ' . $ad->title;
//$this->params['breadcrumbs'][] = ['label' => 'Apartment Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="apartment-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
