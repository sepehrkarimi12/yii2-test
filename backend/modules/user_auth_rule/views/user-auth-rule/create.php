<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\user_auth_rule\models\UserAuthRule */

$this->title = 'Create User Auth Rule';
$this->params['breadcrumbs'][] = ['label' => 'User Auth Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-auth-rule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
