<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\home_sell\models\HomeSell */

$this->title = 'فروش مسکونی (خانه و ویلا) : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="home-sell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
