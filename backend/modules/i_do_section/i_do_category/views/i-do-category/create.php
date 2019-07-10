<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\i_do_section\i_do_category\models\IDoCategory */

$this->title = 'Create I Do Category';
$this->params['breadcrumbs'][] = ['label' => 'I Do Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ido-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
