<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\land_sell\models\LandSell */

$this->title = 'فروش مسکونی (زمین و کلنگی)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="land-sell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
