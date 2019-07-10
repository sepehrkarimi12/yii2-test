<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="rtl"> lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode('گهیران | ' . $this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'آگهی', 'url' => ['/site/index']],
        ['label' => 'انجام میدم', 'url' => ['/site/i_do']],
        ['label' => 'تخفیف', 'url' => ['/site/off']],
        ['label' => 'gii', 'url' => ['/gii'],],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'ثبت نام', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'ورود', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'خروج (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    $menuItems[] = [
            'label' => 'تهران',
            'items' => [
                ['label' => 'درباره ما', 'url' => ['/site/about'],],
                ['label' => 'ارتباط ', 'url' => ['/site/contact'],'options'=>['class'=>'']],
                 ['label' => 'تهران', 'url' => '#'],
                 '<li class="divider"></li>',
                 '<li class="dropdown-header">Dropdown Header</li>',
                 ['label' => 'تغییر شهر +', 'url' => '#'],
            ],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<center class="navbar-fixed-bottom">
<a href="<?= Url::home() . 'new'?>" class="btn btn-danger btn-lg bottom-nav">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ثبت آگهی رایگان
</a>
</center>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
