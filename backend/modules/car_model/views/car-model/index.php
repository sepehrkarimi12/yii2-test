<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\car_brand\models\CarBrand;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\car_model\models\searchModels\CarModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Car Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'brand_id',
                'value' => function ($model) {
                    return $model->carBrand->title;
                },
                'filter' => CarBrand::getListForDropDown('id', 'title'),
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
