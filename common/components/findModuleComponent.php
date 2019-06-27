<?php

namespace common\components;

use yii;
use common\models\CategoryModelAddress;
use yii\base\Component;

class findModuleComponent extends Component
{

    private function find($cat_id) {
        return CategoryModelAddress::findOne(['cat_id' => $cat_id]);
    }

    /**
     * this method returns full address of category's model :
     * frontend\modules\apartment_rent\models\ApartmentRent
     * @param $cat_id
     * @return string
     * @author sepehr
     */
    public function getAddress($cat_id)
    {
        $address = $this->find($cat_id);
        if ($address) {
            return $address->model_address;
        }
        else {
            Yii::$app->response->redirect(['new'])->send();
        }
    }


    /**
     * this method returns module_name example :
     * frontend\modules\apartment_rent\models\ApartmentRent -> apartment_rent
     * @param $cat_id
     * @return string
     * @author sepehr
     */
    public function getModuleName($cat_id)
    {
        $address = $this->find($cat_id);
        if ($address) {
            $address = explode("\\",$address->model_address);
            $module_name = $address[2];
            return $module_name;
        }
        else {
            Yii::$app->response->redirect(['new'])->send();
        }
    }

    public function convertModuleToController($module_name)
    {
        return str_replace('_','-',$module_name);
    }

}