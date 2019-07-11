<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\i_do_section\models\IDoAd */

$this->title = 'ویرایش : ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'انجام میدم', 'url' => ['../new/i-do']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="ido-ad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
