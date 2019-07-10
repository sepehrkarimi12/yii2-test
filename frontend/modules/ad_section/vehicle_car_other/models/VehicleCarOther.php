<?php

namespace frontend\modules\ad_section\vehicle_car_other\models;

use backend\modules\ad_type\models\AdType;
use backend\modules\car_created_year\models\CarCreatedYear;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "tbl_vehicle_car_heavy".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $created_year_id
 * @property int $miles
 * @property int $ad_type_id
 *
 * @property Ad $ad
 * @property AdType $adType
 * @property CarCreatedYear $createdYear
 */
class VehicleCarOther extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_vehicle_car_other';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'created_year_id', 'miles', 'ad_type_id'], 'integer'],
            [['miles', 'ad_type_id'], 'required'],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
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
            'created_year_id' => 'سال ساخت',
            'ad_type_id' => 'نوع آگهی',
            'miles' => 'کارکرد',
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
    public function getCreatedYear()
    {
        return $this->hasOne(CarCreatedYear::className(), ['id' => 'created_year_id']);
    }
}
