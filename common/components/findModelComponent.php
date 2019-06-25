<?php

namespace common\components;

use yii;
use common\models\CategoryModelAddress;
use yii\base\Component;

class findModelComponent extends Component
{
    public function getAddress($cat_id)
    {
        $address = CategoryModelAddress::findOne(['cat_id' => $cat_id]);

        if ($address) {
            return Yii::createObject($address->model_address);
        }
        else {
            Yii::$app->response->redirect(['new'])->send();
        }

    }
}