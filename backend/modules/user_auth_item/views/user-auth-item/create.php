<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\user_auth_item\models\UserAuthItem */

$this->title = 'Create User Auth Item';
$this->params['breadcrumbs'][] = ['label' => 'User Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-auth-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
