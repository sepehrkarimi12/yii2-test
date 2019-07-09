<?php

namespace frontend\modules\mobile_and_tablet_mobile\models;

use backend\modules\ad_type\models\AdType;
use backend\modules\mobile_and_computer_brand\models\MobileAndComputerBrand;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;

/**
 * This is the model class for table "tbl_mobile_and_tablet_mobile".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $brand_id
 * @property int $ad_type_id
 *
 * @property Ad $ad
 * @property AdType $adType
 * @property MobileAndComputeBrand $brand
 */
class MobileAndTabletMobile extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mobile_and_tablet_mobile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'brand_id', 'ad_type_id'], 'integer'],
            [['ad_type_id'], 'required'],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => MobileAndComputerBrand::className(), 'targetAttribute' => ['brand_id' => 'id']],
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
            'brand_id' => 'برند گوشی',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(MobileAndComputerBrand::className(), ['id' => 'brand_id']);
    }
}
