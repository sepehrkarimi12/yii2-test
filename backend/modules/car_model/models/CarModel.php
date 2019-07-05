<?php

namespace backend\modules\car_model\models;

use backend\modules\car_brand\models\CarBrand;
use Yii;

/**
 * This is the model class for table "tbl_car_model".
 *
 * @property int $id
 * @property string $title
 * @property int $brand_id
 *
 * @property TblCarBrigade[] $tblCarBrigades
 * @property TblCarBrand $brand
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_car_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['brand_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarBrand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBrigades()
    {
        return $this->hasMany(CarBrigade::className(), ['model_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(CarBrand::className(), ['id' => 'brand_id']);
    }
}
