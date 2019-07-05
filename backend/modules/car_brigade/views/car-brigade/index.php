<?php

use backend\modules\car_model\models\CarModel;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\car_brigade\models\searchModels\CarBrigadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Brigades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brigade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Car Brigade', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'model_id',
                'value' => function ($model) {
                    return $model->carModel->title;
                },
                'filter' => CarModel::getListForDropDown('id', 'title'),
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
