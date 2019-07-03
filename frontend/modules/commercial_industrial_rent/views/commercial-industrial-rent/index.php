<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\home_rent\models\searchModels\HomeRentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Rents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-rent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Home Rent', ['create'], ['class' => 'btn btn-success']) ?>
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
            'area',
            'ad_type_id',
            'ad_advertiser_id',
            //'deposit',
            //'rent_value',
            //'room_count_id',
            //'created_year_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
