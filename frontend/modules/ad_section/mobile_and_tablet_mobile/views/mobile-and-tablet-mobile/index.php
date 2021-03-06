<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\mobile_and_tablet_mobile\models\searchModels\MobileAndTabletMobileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mobile And Tablet Mobiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobile-and-tablet-mobile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mobile And Tablet Mobile', ['create'], ['class' => 'btn btn-success']) ?>
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
            'ad_type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
