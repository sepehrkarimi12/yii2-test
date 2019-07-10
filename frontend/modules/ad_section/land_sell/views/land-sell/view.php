<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\land_sell\models\LandSell */

$this->title = $model->ad->title;
$this->params['breadcrumbs'][] = ['label' => 'فروش مسکونی (زمین و کلنگی)'];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="land-sell-view">

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
                'attribute' => 'price',
                'value' => function($model) {
                    return $model->ad->price ? $model->ad->price . ' تومان' : '-';
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
                'attribute' => 'national_code',
                'value' => function($model) {
                    return $model->national_code ? $model->national_code : '-';
                }
            ],
            [
                'attribute' => 'exchange',
                'value' => function($model) {
                    return $model->ad->exchange ? 'دارم' : 'ندارم';
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
