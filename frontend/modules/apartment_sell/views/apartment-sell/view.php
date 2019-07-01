<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_sell\models\ApartmentSell */

$this->title = $ad->title;
$this->params['breadcrumbs'][] = ['label' => 'فروش مسکونی (آپارتمان)'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="apartment-sell-view">

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
                    return $model->ad_id ? $model->ad->desc : '-';
                }
            ],
            [
                'attribute' => 'city_id',
                'value' => function($model) {
                    return $model->ad_id ? $model->ad->cityRange->city->title : '-';
                }
            ],
            [
                'attribute' => 'city_range_id',
                'value' => function($model) {
                    return $model->ad_id ? $model->ad->cityRange->title : '-';
                }
            ],
            [
                'attribute' => 'price',
                'value' => function($model) {
                    return $model->ad_id ? $model->ad->price . ' تومان' : '-';
                }
            ],
            [
                'attribute' => 'mobile',
                'value' => function($model) {
                    return $model->ad_id ? $model->ad->mobile : '-';
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
                'attribute' => 'national_code',
                'value' => function($model) {
                    return $model->national_code ? $model->national_code : '-';
                }
            ],
            [
                'attribute' => 'immediate',
                'value' => function($model) {
                    return $model->ad_id ? 'آگهی فوری است' : 'آگهی فوری نیست';
                }
            ],
            [
                'attribute' => 'chat',
                'value' => function($model) {
                    return $model->ad_id ? 'چت فعال است' : 'چت فعال نیست';
                }
            ],
            [
                'attribute' => 'immediate',
                'value' => function($model) {
                    return $model->ad_id ? 'تمایل به معوضه ندارم' : 'تمایل به معاوضه دارم';
                }
            ],
        ],
    ]) ?>

</div>
