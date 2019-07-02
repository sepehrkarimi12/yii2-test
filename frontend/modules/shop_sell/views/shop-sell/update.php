<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\office_sell\models\OfficeSell */

$this->title = 'فروش اداری و تجاری (مغازه و غرفه) : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="office-sell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
