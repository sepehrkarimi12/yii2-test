<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\estate_agensy\models\EstateAgensy */

$this->title = 'خدمات املاک (پیش فروش)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estate-agensy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
