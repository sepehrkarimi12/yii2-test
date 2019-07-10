<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\i_do_section\i_do_category\models\IDoCategory */

$this->title = 'Update I Do Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'I Do Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ido-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
