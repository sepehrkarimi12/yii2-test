<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\other_rent\models\OtherRent */

$this->title = 'اجاره مسکونی (متفرقه)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-rent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ad' => $ad,
    ]) ?>

</div>
