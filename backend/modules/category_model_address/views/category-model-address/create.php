<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_model_address\models\CategoryModelAddress */

$this->title = 'Create Category Model Address';
$this->params['breadcrumbs'][] = ['label' => 'Category Model Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-model-address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
