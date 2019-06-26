<?php

namespace frontend\controllers;

use common\models\Category;
use common\geoplugin\GeoPlugin;
use Yii;

class NewController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$categories = Category::find()
    	->where(['parent_id' => null])
    	->orderBy('sort')
    	->all();
    	
        return $this->render('index', [
            'categories' => $categories,
        ]);
    }

    public function actionCreate($cat_id = null)
    {
        d(Yii::$app->findModuleComponent->getModuleName($cat_id));
    }

}
