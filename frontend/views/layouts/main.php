<?php
//d(Yii::$app->controller->action->id);
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
        ['label' => 'آگهی', 'url' => ['/site/ad']],
        ['label' => 'انجام میدم', 'url' => ['/site/i-do']],
        ['label' => 'تخفیف', 'url' => ['/site/discount']],
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

<?php if (Yii::$app->controller->id == 'site') : ?>
    <center class="navbar-fixed-bottom">
    <?php if (Yii::$app->controller->action->id == 'ad') : ?>
        <a href="<?= Url::home() . 'new/ad'?>" class="btn btn-danger btn-lg bottom-nav">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ثبت آگهی رایگان
        </a>
    <?php elseif (Yii::$app->controller->action->id == 'i-do') : ?>
        <a href="<?= Url::home() . 'new/i-do'?>" class="btn btn-danger btn-lg bottom-nav">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ثبت انجام میدم رایگان
        </a>
    <?php elseif (Yii::$app->controller->action->id == 'discount') : ?>
        <a href="<?= Url::home() . 'new/discount'?>" class="btn btn-danger btn-lg bottom-nav">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ثبت تخفیف رایگان
        </a>
    <?php endif; ?>
    </center>
<?php endif; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
