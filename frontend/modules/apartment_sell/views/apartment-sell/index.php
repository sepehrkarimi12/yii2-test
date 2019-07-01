<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\apartment_sell\models\searchModels\ApartmentSellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apartment Sells';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-sell-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Apartment Sell', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'room_count_id',
            //'created_year_id',
            //'national_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
