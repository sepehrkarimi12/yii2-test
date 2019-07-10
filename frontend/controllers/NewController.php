<?php

namespace frontend\controllers;

use backend\modules\i_do_section\i_do_category\models\IDoCategory;
use common\models\Ad;
use common\models\Category;
use common\geoplugin\GeoPlugin;
use Yii;

class NewController extends \yii\web\Controller
{
    public function actionAd()
    {
        $categories = Category::find()
            ->where(['parent_id' => null])
            ->andWhere(['status' => 1])
            ->orderBy('sort')
            ->all();

        return $this->render('index_ad', [
            'categories' => $categories,
        ]);
    }

    public function actionIDo()
    {
        $categories = IDoCategory::find()
            ->where(['parent_id' => null])
            ->andWhere(['status' => 1])
            ->orderBy('sort')
            ->all();

        return $this->render('index_i_do', [
            'categories' => $categories,
        ]);
    }

    public function actionCreateAd($cat_id = null)
    {
        $module_name = Yii::$app->findModuleComponent->getModuleName($cat_id);
        $controller_name = Yii::$app->findModuleComponent->convertModuleToController($module_name);
        $address = $module_name . '/' . $controller_name;

        $this->redirect([
            $address . '/create',
            'cat_id' => $cat_id,
        ]);
    }

    public function actionCreateIDo($cat_id = null)
    {
        d($cat_id);
    }

}
