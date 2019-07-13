<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\i_do_section\models\IDoAd */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'انجام میدم', 'url' => ['../new/i-do']];
$this->params['breadcrumbs'][] = ['label' => $model->cat->title];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ido-ad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ویرایش', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('حذف', ['delete', 'id' => $model->id], [
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
            [
                'attribute' => 'desc',
                'value' => function($model) {
                    return $model->desc ? $model->desc : '-';
                }
            ],
            [
                'attribute' => 'city_id',
                'value' => function($model) {
                    return $model->city_id ? $model->cityRange->city->title : '-';
                }
            ],
            [
                'attribute' => 'city_range_id',
                'value' => function($model) {
                    return $model->city_range_id ? $model->cityRange->title : '-';
                }
            ],
            [
                'attribute' => 'price',
                'value' => function($model) {
                    return $model->price ? $model->price . ' تومان' : '-';
                }
            ],
            [
                'attribute' => 'mobile',
                'value' => function($model) {
                    return $model->mobile ? $model->mobile : '-';
                }
            ],
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status ? 'فعال' : 'غیر فعال';
                }
            ],
            [
                'attribute' => 'chat',
                'value' => function($model) {
                    return $model->chat ? 'چت فعال است' : 'چت فعال نیست';
                }
            ],
            [
                'attribute' => 'expired',
                'value' => function($model) {
                    return $model->expired ? 'شده است' : 'نشده است';
                },
                'label' => 'آگهی منقضی'
            ],
            [
                'attribute' => 'created_at',
                'value' => function($model) {
                    return $model->created_at ? Yii::$app->formatter->asDatetime($model->created_at) : '-';
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function($model) {
                    return $model->updated_at ? Yii::$app->formatter->asDatetime($model->updated_at) : '-';
                }
            ],
            [
                'attribute' => 'published_at',
                'value' => function($model) {
                    return $model->published_at ? Yii::$app->formatter->asDatetime($model->published_at) : '-';
                }
            ],
        ],
    ]) ?>

</div>
