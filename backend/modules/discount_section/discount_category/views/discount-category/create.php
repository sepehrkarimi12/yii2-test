<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\discount_section\models\DiscountCategory */

$this->title = 'Create Discount Category';
$this->params['breadcrumbs'][] = ['label' => 'Discount Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
