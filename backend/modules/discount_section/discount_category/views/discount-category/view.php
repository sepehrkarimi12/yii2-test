<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\discount_section\models\DiscountCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Discount Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="discount-category-view">

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
            'title',
            [
                'attribute' => 'parent_id',
                'value' => function($data) {
                    return $data->parent ? $data->parent->title . ' (' . $data->parent_id  . ')' : '-';
                },
                'label' => 'Parent',
            ],
            'sort',
            [
                'attribute'=>'status',
                'value'=>function($data) {
                    return $data->status ? 'فعال' : 'غیر فعال';
                }
            ],
        ],
    ]) ?>

</div>
