<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\other_sell\models\OtherSell */

$this->title = 'فروش مسکونی (متفرقه)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-sell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
