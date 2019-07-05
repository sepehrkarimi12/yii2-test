<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\estate_agensy\models\EstateAgensy */

$this->title = 'خدمات املاک (متفرقه) : ' . $ad->title;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="estate-agensy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
