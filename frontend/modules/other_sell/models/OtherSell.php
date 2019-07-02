<?php

namespace frontend\modules\other_sell\models;

use backend\modules\ad_advertiser\models\AdAdvertiser;
use backend\modules\ad_type\models\AdType;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "tbl_other_sell".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $area
 * @property int $ad_type_id
 * @property int $ad_advertiser_id
 * @property string $national_code
 *
 * @property AdAdvertiser $adAdvertiser
 * @property Ad $ad
 * @property AdType $adType
 */
class OtherSell extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_other_sell';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'area', 'ad_type_id', 'ad_advertiser_id',], 'integer'],
            [['area', 'ad_type_id', 'ad_advertiser_id',], 'required'],
            [['national_code'], 'string', 'max' => 10],
            [['ad_advertiser_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdAdvertiser::className(), 'targetAttribute' => ['ad_advertiser_id' => 'id']],
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
            'area' => 'متراژ',
            'ad_type_id' => 'نوع آگهی',
            'ad_advertiser_id' => 'آگهی دهنده',
            'national_code' => 'شماره ملی',
            'imageFiles' => 'عکس آگهی',
        ] + $ad;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdAdvertiser()
    {
        return $this->hasOne(AdAdvertiser::className(), ['id' => 'ad_advertiser_id']);
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
