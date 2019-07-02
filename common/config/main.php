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
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'locale' => 'fa_IR@calendar=persian',
            'calendar' => \IntlDateFormatter::TRADITIONAL,
            'dateFormat' => 'php:Y-m-d',
            'datetimeFormat' => 'php:Y/m/d H:i',
            'timeFormat' => 'php:H:i',
        ],
    ],
];
