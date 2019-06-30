<?php

use common\models\Category;
use backend\modules\ad_advertiser\models\AdAdvertiser;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\category_ad_advertiser\models\searchModels\CategoryAdAdvertiserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Ad Advertisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-ad-advertiser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Ad Advertiser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'cat_id',
                'value' => function ($model) {
                    return $model->cat->title . ' -> ' . $model->cat->parent->title;
                },
                'filter' => Category::getLeafsAsDropDown(),
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'prompt' => 'همه'
                ],
            ],
            [
                'attribute' => 'ad_advertiser_id',
                'value' => function ($model) {
                    return $model->adAdvertiser->title;
                },
                'filter' => AdAdvertiser::getListForDropDown('id', 'title'),
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'prompt' => 'همه'
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
