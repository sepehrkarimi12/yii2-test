<?php

namespace backend\modules\category_model_address\controllers;

use yii\web\Controller;

/**
 * Default controller for the `category_model_address` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
