<?php

namespace frontend\modules\ad_section\vehicle_car_riding\models;

use backend\modules\ad_type\models\AdType;
use backend\modules\car_brand\models\CarBrand;
use backend\modules\car_color\models\CarColor;
use backend\modules\car_created_year\models\CarCreatedYear;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;

/**
 * This is the model class for table "{{%tbl_vehicle_car_riding}}".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $brand_id
 * @property int $color_id
 * @property int $ad_type_id
 * @property int $created_year_id
 * @property int $miles
 * @property string $national_code
 *
 * @property Ad $ad
 * @property AdType $adType
 * @property CarBrand $brand
 * @property CarColor $color
 * @property CarCreatedYear $createdYear
 */
class VehicleCarRiding extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_vehicle_car_riding}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'brand_id', 'color_id', 'ad_type_id', 'created_year_id', 'miles'], 'integer'],
            [['ad_type_id', 'miles'], 'required'],
            [['national_code'], 'string', 'max' => 10],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarBrand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarColor::className(), 'targetAttribute' => ['color_id' => 'id']],
            [['created_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarCreatedYear::className(), 'targetAttribute' => ['created_year_id' => 'id']],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        $model = new Ad();
        $ad = $model->attributeLabels();
        return [
            'id' => 'شناسه',
            'ad_id' => 'شناشه آگهی',
            'brand_id' => 'برند',
            'color_id' => 'رنگ',
            'ad_type_id' => 'نوع آگهی',
            'created_year_id' => 'سال ساخت',
            'miles' => 'کارکرد',
            'national_code' => 'شماره ملی',
            'imageFiles' => 'عکس آگهی',
        ] + $ad;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAd()
    {
        return $this->hasOne(Ad::className(), ['id' => 'ad_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdType()
    {
        return $this->hasOne(AdType::className(), ['id' => 'ad_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(CarBrand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(CarColor::className(), ['id' => 'color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedYear()
    {
        return $this->hasOne(CarCreatedYear::className(), ['id' => 'created_year_id']);
    }
}
