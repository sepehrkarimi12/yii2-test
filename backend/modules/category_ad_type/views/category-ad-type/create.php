<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_ad_type\models\CategoryAdType */

$this->title = 'Create Category Ad Type';
$this->params['breadcrumbs'][] = ['label' => 'Category Ad Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-ad-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
