<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\home_rent\models\HomeRent */

$this->title = $model->ad->title;
$this->params['breadcrumbs'][] = ['label' => 'اجاره اداری و تجاری (مغازه و غرفه)'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="home-rent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ویرایش آگهی', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('حذف آگهی', ['../ad/ad/delete', 'id' => $model->ad_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'مطمئنید کخه میخواهید آگهی را حذف کنید؟',
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
                    return $model->ad->desc ? $model->ad->desc : '-';
                }
            ],
            [
                'attribute' => 'city_id',
                'value' => function($model) {
                    return $model->ad->city_id ? $model->ad->cityRange->city->title : '-';
                }
            ],
            [
                'attribute' => 'city_range_id',
                'value' => function($model) {
                    return $model->ad->city_range_id ? $model->ad->cityRange->title : '-';
                }
            ],
            [
                'attribute' => 'mobile',
                'value' => function($model) {
                    return $model->ad->mobile ? $model->ad->mobile : '-';
                }
            ],
            [
                'attribute' => 'area',
                'value' => function($model) {
                    return $model->area ? $model->area . ' متر' : '-';
                }
            ],
            [
                'attribute' => 'ad_type_id',
                'value' => function($model) {
                    return $model->ad_type_id ? $model->adType->title : '-';
                }
            ],
            [
                'attribute' => 'ad_advertiser_id',
                'value' => function($model) {
                    return $model->ad_advertiser_id ? $model->adAdvertiser->title : '-';
                }
            ],
            [
                'attribute' => 'deposit',
                'value' => function($model) {
                    return $model->deposit ? $model->deposit . ' تومان' : '-';
                }
            ],
            [
                'attribute' => 'rent_value',
                'value' => function($model) {
                    return $model->rent_value ? $model->rent_value . ' تومان' : '-';
                }
            ],
            [
                'attribute' => 'room_count_id',
                'value' => function($model) {
                    return $model->room_count_id ? $model->roomCount->title : '-';
                }
            ],
            [
                'attribute' => 'created_year_id',
                'value' => function($model) {
                    return $model->created_year_id ? $model->createdYear->title : '-';
                }
            ],
            [
                'attribute' => 'immediate',
                'value' => function($model) {
                    return $model->ad->immediate ? 'آگهی فوری است' : 'آگهی فوری نیست';
                }
            ],
            [
                'attribute' => 'chat',
                'value' => function($model) {
                    return $model->ad->chat ? 'چت فعال است' : 'چت فعال نیست';
                }
            ],
            [
                'attribute' => 'expired',
                'value' => function($model) {
                    return $model->ad->expired ? 'شده است' : 'نشده است';
                },
                'label' => 'آگهی منقضی'

            ],
            [
                'attribute' => 'created_at',
                'value' => function($model) {
                    return $model->ad->created_at ? Yii::$app->formatter->asDatetime($model->ad->created_at) : '-';
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function($model) {
                    return $model->ad->updated_at ? Yii::$app->formatter->asDatetime($model->ad->updated_at) : '-';
                }
            ],
            [
                'attribute' => 'published_at',
                'value' => function($model) {
                    return $model->ad->published_at ? Yii::$app->formatter->asDatetime($model->ad->published_at) : '-';
                }
            ],
        ],
    ]) ?>

</div>
