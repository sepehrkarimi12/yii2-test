<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\mobile_brand\models\MobileAndComputeBrand */

$this->title = 'Create Mobile Brand';
$this->params['breadcrumbs'][] = ['label' => 'Mobile Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobile-brand-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
