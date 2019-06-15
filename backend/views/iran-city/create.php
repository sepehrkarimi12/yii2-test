<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IranCity */

$this->title = 'Create Iran City';
$this->params['breadcrumbs'][] = ['label' => 'Iran Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iran-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
