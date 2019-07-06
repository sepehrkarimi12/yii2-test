<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\user_auth_rule\models\UserAuthRule */

$this->title = 'Update User Auth Rule: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Auth Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-auth-rule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
