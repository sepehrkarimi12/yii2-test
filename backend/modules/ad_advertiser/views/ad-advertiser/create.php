<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ad_advertiser\models\AdAdvertiser */

$this->title = 'Create Ad Advertiser';
$this->params['breadcrumbs'][] = ['label' => 'Ad Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-advertiser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
