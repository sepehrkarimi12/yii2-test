<?php

namespace frontend\modules\ad_section\vehicle_car_rent\models;

use backend\modules\ad_type\models\AdType;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "{{%tbl_vehicle_car_rent}}".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $ad_type_id
 *
 * @property Ad $ad
 * @property AdType $adType
 */
class VehicleCarRent extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_vehicle_car_rent}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'ad_type_id'], 'integer'],
            [['ad_type_id'], 'required'],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
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
            'id' => 'ID',
            'ad_id' => 'Ad ID',
            'ad_type_id' => 'نوع آگهی',
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
}
