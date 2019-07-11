<?php

use yii\helpers\Html;use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\i_do_section\models\IDoAd */

$this->title = $model->cat->title;
$this->params['breadcrumbs'][] = ['label' => 'انجام میدم', 'url' => ['../new/i-do']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ido-ad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
