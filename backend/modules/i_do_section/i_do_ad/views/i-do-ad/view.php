<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\i_do_section\i_do_ad\models\IDoAd */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'I Do Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ido-ad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cat_id',
            'city_id',
            'city_range_id',
            'title',
            'desc:ntext',
            'price',
            'mobile',
            'org_pic',
            'pic_counts',
            'status',
            'chat',
            'expired',
            'user_id',
            'created_at',
            'updated_at',
            'published_at',
        ],
    ]) ?>

</div>
