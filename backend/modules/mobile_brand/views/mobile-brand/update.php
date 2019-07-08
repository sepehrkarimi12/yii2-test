<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\mobile_brand\models\MobileBrand */

$this->title = 'Update Mobile Brand: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mobile Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mobile-brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
