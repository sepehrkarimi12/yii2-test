<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\office_sell\models\OfficeSell */

$this->title = 'فروش اداری و تجاری (دفتر کار،اتاق اداری، مطب)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="office-sell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
