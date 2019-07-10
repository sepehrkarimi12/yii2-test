<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\mobile_and_tablet_sim_card\models\MobileAndTabletSimCard */

$this->title = 'سیم کارت : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="mobile-and-tablet-sim-card-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
