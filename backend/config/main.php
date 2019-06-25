<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'category' => [
            'class' => 'backend\modules\category\category',
            'defaultRoute' => 'category',
        ],
        'question' => [
            'class' => 'backend\modules\question\question',
            'defaultRoute' => 'question',
        ],
        'ad_type' => [
            'class' => 'backend\modules\ad_type\ad_type',
            'defaultRoute' => 'ad-type',
        ],
        'category_ad_type' => [
            'class' => 'backend\modules\category_ad_type\category_ad_type',
            'defaultRoute' => 'category-ad-type',
        ],
        'ad_advertiser' => [
            'class' => 'backend\modules\ad_advertiser\ad_advertiser',
            'defaultRoute' => 'ad-advertiser',
        ],
        'category_ad_advertiser' => [
            'class' => 'backend\modules\category_ad_advertiser\category_ad_advertiser',
            'defaultRoute' => 'category-ad-advertiser',
        ],
        'category_model_address' => [
            'class' => 'backend\modules\category_model_address\category_model_address',
            'defaultRoute' => 'category-model-address',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
