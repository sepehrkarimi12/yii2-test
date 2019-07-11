<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\discount_section\models\DiscountCategory */

$this->title = 'Update Discount Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Discount Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="discount-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
