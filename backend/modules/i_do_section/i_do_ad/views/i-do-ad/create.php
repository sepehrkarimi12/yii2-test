<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\i_do_section\i_do_ad\models\IDoAd */

$this->title = 'Create I Do Ad';
$this->params['breadcrumbs'][] = ['label' => 'I Do Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ido-ad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
