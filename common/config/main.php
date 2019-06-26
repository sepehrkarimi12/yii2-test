<?php
return [
    'language' => 'fa',
    'name'=>'گهیران',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'findModuleComponent' => [
            'class' => 'common\components\findModuleComponent',
        ],
    ],
];
