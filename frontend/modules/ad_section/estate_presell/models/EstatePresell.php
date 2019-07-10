<?php

namespace frontend\modules\ad_section\estate_presell\models;

use backend\modules\ad_advertiser\models\AdAdvertiser;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "tbl_estate_agensy".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $ad_advertiser_id
 *
 * @property TblAdAdvertiser $adAdvertiser
 * @property TblAd $ad
 */
    class EstatePresell extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_estate_presell';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'ad_advertiser_id'], 'integer'],
            [['ad_advertiser_id'], 'required'],
            [['ad_advertiser_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdAdvertiser::className(), 'targetAttribute' => ['ad_advertiser_id' => 'id']],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
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
            'ad_advertiser_id' => 'آگهی دهنده',
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
}
