<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_ad_advertiser\models\CategoryAdAdvertiser */

$this->title = 'Create Category Ad Advertiser';
$this->params['breadcrumbs'][] = ['label' => 'Category Ad Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-ad-advertiser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
