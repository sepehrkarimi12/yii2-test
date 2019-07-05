<?php

namespace backend\modules\car_created_year\controllers;

use yii\web\Controller;

/**
 * Default controller for the `car_created_year` module
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
