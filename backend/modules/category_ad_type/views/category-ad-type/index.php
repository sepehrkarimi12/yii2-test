<?php

use backend\modules\ad_type\models\AdType;
use common\models\Category;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\category_ad_type\models\searchModels\CategoryAdTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Ad Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-ad-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Ad Type', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'ad_type_id',
                'value' => function ($model) {
                    return $model->adType->title;
                },
                'filter' => AdType::getListForDropDown('id', 'title'),
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
