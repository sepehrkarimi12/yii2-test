<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\discount_section\models\searchModels\DiscountCategory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discount Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Discount Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                'attribute' => 'status',
                'value' => function($data) {
                    return $data->status ? 'فعال' : 'غیر فعال';
                },
                'filter' => [1 => 'فعال', 0 => 'غیر فعال'],
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
