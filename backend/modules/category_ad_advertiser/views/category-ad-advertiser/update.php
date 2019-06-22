<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_ad_advertiser\models\CategoryAdAdvertiser */

$this->title = 'Update Category Ad Advertiser: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category Ad Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-ad-advertiser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
