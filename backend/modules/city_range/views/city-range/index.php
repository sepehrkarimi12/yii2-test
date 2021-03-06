<?php

use backend\modules\city\models\City;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\city_range\models\searchModels\CityRangeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'City Ranges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-range-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create City Range', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
            [
                'attribute' => 'city_id',
                'value' => function ($model) {
                    return $model->city->title;
                },
                'filter' => City::getListForDropDown('id', 'title'),
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
