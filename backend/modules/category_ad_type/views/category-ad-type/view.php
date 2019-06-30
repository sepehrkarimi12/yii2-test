<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\category_ad_type\models\CategoryAdType */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category Ad Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-ad-type-view">

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
//            'id',
            [
                'attribute' => 'cat_id',
                'value' => function ($model) {
                    return $model->cat->title . ' -> ' . $model->cat->parent->title;
                }
            ],
            [
                'attribute' => 'ad_type_id',
                'value' => function ($model) {
                    return $model->adType->title;
                }
            ],
        ],
    ]) ?>

</div>
