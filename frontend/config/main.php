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
    'defaultRoute' => 'site/ad',
    'modules' => [
        'ad' => [
            'class' => 'frontend\modules\ad_section\ad\ad',
            'defaultRoute' => 'ad',
        ],
        'apartment_rent' => [
            'class' => 'frontend\modules\ad_section\apartment_rent\apartment_rent',
            'defaultRoute' => 'apartment-rent',
        ],
        'image' => [
            'class' => 'frontend\modules\ad_section\image\image',
            'defaultRoute' => 'image',
        ],
        'home_rent' => [
            'class' => 'frontend\modules\ad_section\home_rent\home_rent',
            'defaultRoute' => 'home-rent',
        ],
        'other_rent' => [
            'class' => 'frontend\modules\ad_section\other_rent\other_rent',
            'defaultRoute' => 'other-rent',
        ],
        'apartment_sell' => [
            'class' => 'frontend\modules\ad_section\apartment_sell\apartment_sell',
            'defaultRoute' => 'apartment-sell',
        ],
        'home_sell' => [
            'class' => 'frontend\modules\ad_section\home_sell\home_sell',
            'defaultRoute' => 'home-sell',
        ],
        'land_sell' => [
            'class' => 'frontend\modules\ad_section\land_sell\land_sell',
            'defaultRoute' => 'land-sell',
        ],
        'other_sell' => [
            'class' => 'frontend\modules\ad_section\other_sell\other_sell',
            'defaultRoute' => 'other-sell',
        ],
        'office_sell' => [
            'class' => 'frontend\modules\ad_section\office_sell\office_sell',
            'defaultRoute' => 'office-sell',
        ],
        'shop_sell' => [
            'class' => 'frontend\modules\ad_section\shop_sell\shop_sell',
            'defaultRoute' => 'shop-sell',
        ],
        'industrial_sell' => [
            'class' => 'frontend\modules\ad_section\industrial_sell\industrial_sell',
            'defaultRoute' => 'industrial-sell',
        ],
        'commercial_other_sell' => [
            'class' => 'frontend\modules\ad_section\commercial_other_sell\commercial_other_sell',
            'defaultRoute' => 'commercial-other-sell',
        ],
        'commercial_office_rent' => [
            'class' => 'frontend\modules\ad_section\commercial_office_rent\commercial_office_rent',
            'defaultRoute' => 'commercial-office-rent',
        ],
        'commercial_other_rent' => [
            'class' => 'frontend\modules\ad_section\commercial_shop_rent\commercial_other_rent',
            'defaultRoute' => 'commercial-industrial-rent',
        ],
        'commercial_industrial_rent' => [
            'class' => 'frontend\modules\ad_section\commercial_industrial_rent\commercial_industrial_rent',
            'defaultRoute' => 'commercial-industrial-rent',
        ],
        'commercial_other_rent' => [
            'class' => 'frontend\modules\ad_section\commercial_other_rent\commercial_other_rent',
            'defaultRoute' => 'commercial-other-rent',
        ],
        'estate_agensy' => [
            'class' => 'frontend\modules\ad_section\estate_agensy\estate_agensy',
            'defaultRoute' => 'state-agency',
        ],
        'participation_in_cunstruction' => [
            'class' => 'frontend\modules\ad_section\participation_in_cunstruction\participation_in_cunstruction',
            'defaultRoute' => 'participation-in-cunstruction',
        ],
        'finance_and_legal' => [
            'class' => 'frontend\modules\ad_section\finance_and_legal\finance_and_legal',
            'defaultRoute' => 'finance-and-legal',
        ],
        'estate_presell' => [
            'class' => 'frontend\modules\ad_section\estate_presell\estate_presell',
            'defaultRoute' => 'estate-presell',
        ],
        'estate_services_other' => [
            'class' => 'frontend\modules\ad_section\estate_services_other\estate_services_other',
            'defaultRoute' => 'estate-services-other',
        ],
        'estate_other' => [
            'class' => 'frontend\modules\ad_section\estate_other\estate_other',
            'defaultRoute' => 'estate-other',
        ],
        'vehicle_car_riding' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_riding\vehicle_car_riding',
            'defaultRoute' => 'vehicle-car-riding',
        ],
        'vehicle_car_rent' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_rent\vehicle_car_rent',
            'defaultRoute' => 'vehicle-car-rent',
        ],
        'vehicle_car_classic' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_classic\vehicle_car_classic',
            'defaultRoute' => 'vehicle-car-classic',
        ],
        'vehicle_car_heavy' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_heavy\vehicle_car_heavy',
            'defaultRoute' => 'vehicle-car-classic',
        ],
        'vehicle_car_other' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_other\vehicle_car_other',
            'defaultRoute' => 'vehicle-car-classic',
        ],
        'vehicle_car_spare_part' => [
            'class' => 'frontend\modules\ad_section\vehicle_car_spare_part\vehicle_car_spare_part',
            'defaultRoute' => 'vehicle-car-spare-part',
        ],
        'vehicle_motorcycle_and_spare_part' => [
            'class' => 'frontend\modules\ad_section\vehicle_motorcycle_and_spare_part\vehicle_motorcycle_and_spare_part',
            'defaultRoute' => 'vehicle-motorcycle-and-spare-part',
        ],
        'vehicle_boat_and_spare_part' => [
            'class' => 'frontend\modules\ad_section\vehicle_boat_and_spare_part\vehicle_boat_and_spare_part',
            'defaultRoute' => 'vehicle-boat-and-spare-part',
        ],
        'vehicle_other' => [
            'class' => 'frontend\modules\ad_section\vehicle_other\vehicle_other',
            'defaultRoute' => 'vehicle-other',
        ],
        'mobile_and_tablet_mobile' => [
            'class' => 'frontend\modules\ad_section\mobile_and_tablet_mobile\mobile_and_tablet_mobile',
            'defaultRoute' => 'mobile-and-tablet-mobile',
        ],
        'mobile_and_tablet_tablet' => [
            'class' => 'frontend\modules\ad_section\mobile_and_tablet_tablet\mobile_and_tablet_tablet',
            'defaultRoute' => 'mobile-and-tablet-tablet',
        ],
        'mobile_and_tablet_spare_part' => [
            'class' => 'frontend\modules\ad_section\mobile_and_tablet_spare_part\mobile_and_tablet_spare_part',
            'defaultRoute' => 'mobile-and-tablet-spare-part',
        ],
        'mobile_and_tablet_sim_card' => [
            'class' => 'frontend\modules\ad_section\mobile_and_tablet_sim_card\mobile_and_tablet_sim_card',
            'defaultRoute' => 'mobile-and-tablet-sim-card',
        ],
        'mobile_and_tablet_other' => [
            'class' => 'frontend\modules\ad_section\mobile_and_tablet_other\mobile_and_tablet_other',
            'defaultRoute' => 'mobile-and-tablet-other',
        ],
        'electronic_computer_laptop' => [
            'class' => 'frontend\modules\ad_section\electronic_computer_laptop\electronic_computer_laptop',
            'defaultRoute' => 'electronic-computer-laptop',
        ],
        'electronic_computer_desktop_computer' => [
            'class' => 'frontend\modules\ad_section\electronic_computer_desktop_computer\electronic_computer_desktop_computer',
            'defaultRoute' => 'electronic-computer-desktop-computer',
        ],
        'electronic_computer_spare_part' => [
            'class' => 'frontend\modules\ad_section\electronic_computer_spare_part\electronic_computer_spare_part',
            'defaultRoute' => 'electronic-computer-spare-part',
        ],
        'electronic_network_spare_part' => [
            'class' => 'frontend\modules\ad_section\electronic_network_spare_part\electronic_network_spare_part',
            'defaultRoute' => 'electronic-network-spare-part',
        ],
        'electronic_printer_scanner_copy_fax' => [
            'class' => 'frontend\modules\ad_section\electronic_printer_scanner_copy_fax\electronic_printer_scanner_copy_fax',
            'defaultRoute' => 'electronic-printer-scanner-copy-fax',
        ],
        'electronic_computer_other' => [
            'class' => 'frontend\modules\ad_section\electronic_computer_other\electronic_computer_other',
            'defaultRoute' => 'electronic-computer-other',
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
