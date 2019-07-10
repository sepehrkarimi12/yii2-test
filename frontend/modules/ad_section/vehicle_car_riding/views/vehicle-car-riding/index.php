<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\vehicle_car_riding\models\searchModels\VehicleCarRidingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Car Ridings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-car-riding-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vehicle Car Riding', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ad_id',
            'brand_id',
            'color_id',
            'ad_type_id',
            //'created_year_id',
            //'miles',
            //'national_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
