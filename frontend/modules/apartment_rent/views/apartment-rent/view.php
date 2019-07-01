<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\apartment_rent\models\ApartmentRent */

$this->title = $ad->title;
$this->params['breadcrumbs'][] = ['label' => 'اجاره مسکونی (آپارتمان)'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="apartment-rent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ویرایش آگهی', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('حذف آگهی', ['delete', 'id' => $model->id], [
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
