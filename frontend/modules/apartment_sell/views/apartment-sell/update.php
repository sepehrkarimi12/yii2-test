<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_sell\models\ApartmentSell */

$this->title = 'فروش مسکونی (آپارتمان) : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="apartment-sell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
