<?php

namespace backend\modules\category;

//use yii2mod\rbac\filters\AccessControl;
/**
 * category module definition class
 */
class category extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\modules\category\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

//    public function behaviors()
//    {
//        return [
//            AccessControl::class
//        ];
//    }
}
