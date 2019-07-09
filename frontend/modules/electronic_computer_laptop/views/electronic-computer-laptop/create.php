<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\mobile_and_tablet_mobile\models\MobileAndTabletMobile */

$this->title = 'موبایل';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobile-and-tablet-mobile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
