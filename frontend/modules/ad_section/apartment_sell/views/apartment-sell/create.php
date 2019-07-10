<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_sell\models\ApartmentSell */

$this->title = 'فروش مسکونی (آپارتمان)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-sell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
