<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\i_do_section\i_do_ad\models\searchModels\IDoAdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'I Do Ads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ido-ad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create I Do Ad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cat_id',
            'city_id',
            'city_range_id',
            'title',
            //'desc:ntext',
            //'price',
            //'mobile',
            //'org_pic',
            //'pic_counts',
            //'status',
            //'chat',
            //'expired',
            //'user_id',
            //'created_at',
            //'updated_at',
            //'published_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
