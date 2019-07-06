<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\user_auth_item\models\UserAuthItem */

$this->title = 'Update User Auth Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-auth-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
