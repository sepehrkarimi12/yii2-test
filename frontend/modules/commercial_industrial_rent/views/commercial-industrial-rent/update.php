<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\home_rent\models\HomeRent */

$this->title = 'اجاره اداری و تجاری (صنعتی، کشاورزی و تجاری) : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="home-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
