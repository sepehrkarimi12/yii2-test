<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_model_address\models\CategoryModelAddress */

$this->title = 'Update Category Model Address: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category Model Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-model-address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
