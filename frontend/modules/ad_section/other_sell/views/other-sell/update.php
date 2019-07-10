<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\other_sell\models\OtherSell */

$this->title = 'فروش مسکونی (متفرقه) : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="other-sell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
