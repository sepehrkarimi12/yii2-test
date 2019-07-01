<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'ad' => [
            'class' => 'frontend\modules\ad\ad',
            'defaultRoute' => 'ad',
        ],
        'apartment_rent' => [
            'class' => 'frontend\modules\apartment_rent\apartment_rent',
            'defaultRoute' => 'apartment-rent',
        ],
        'image' => [
            'class' => 'frontend\modules\image\image',
            'defaultRoute' => 'image',
        ],
        'home_rent' => [
            'class' => 'frontend\modules\home_rent\home_rent',
            'defaultRoute' => 'home-rent',
        ],
        'other_rent' => [
            'class' => 'frontend\modules\other_rent\other_rent',
            'defaultRoute' => 'other-rent',
        ],
        'apartment_sell' => [
            'class' => 'frontend\modules\apartment_sell\apartment_sell',
            'defaultRoute' => 'apartment-sell',

        ],
        'home_sell' => [
            'class' => 'frontend\modules\home_sell\home_sell',
            'defaultRoute' => 'home-sell',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
