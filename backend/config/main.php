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
        'city' => [
            'class' => 'backend\modules\city\city',
            'defaultRoute' => 'city',
        ],
        'city_range' => [
            'class' => 'backend\modules\city_range\city_range',
            'defaultRoute' => 'city-range',
        ],
        'menu_group' => [
            'class' => 'backend\modules\menu_group\menu_group',
            'defaultRoute' => 'menu-group',
        ],
        'menu' => [
            'class' => 'backend\modules\menu\menu',
            'defaultRoute' => 'menu',
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
        'car_brand' => [
            'class' => 'backend\modules\car_brand\car_brand',
            'defaultRoute' => 'car-brand',
        ],
        'car_color' => [
            'class' => 'backend\modules\car_color\car_color',
            'defaultRoute' => 'car-color',
        ],
        'car_created_year' => [
            'class' => 'backend\modules\car_created_year\car_created_year',
            'defaultRoute' => 'car-created-year',
        ],
        'mobile_brand' => [
            'class' => 'backend\modules\mobile_brand\mobile_brand',
            'defaultRoute' => 'mobile-brand',
        ],
        'sim_card' => [
            'class' => 'backend\modules\sim_card\sim_card',
            'defaultRoute' => 'sim-card',
        ],
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        'rbac/route' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        'rbac/permission' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        'rbac/role' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        'rbac/assignment' => [
            'class' => 'yii2mod\rbac\Module',
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
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
