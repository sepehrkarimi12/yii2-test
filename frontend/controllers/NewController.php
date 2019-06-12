<?php

namespace frontend\controllers;

use common\models\Category;

class NewController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$categories = Category::find()->all();
        return $this->render('index', [
            'categories' => $categories,
        ]);
    }

}
