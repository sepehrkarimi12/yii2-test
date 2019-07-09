<?php

namespace frontend\modules\mobile_and_tablet_sim_card\models;

use backend\modules\ad_type\models\AdType;
use backend\modules\sim_card\models\SimCard;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;

/**
 * This is the model class for table "tbl_mobile_and_tablet_sim_card".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $sim_card_type_id
 * @property int $ad_type_id
 *
 * @property Ad $ad
 * @property AdType $adType
 * @property SimCard $simCardType
 */
class MobileAndTabletSimCard extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mobile_and_tablet_sim_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'sim_card_type_id', 'ad_type_id'], 'integer'],
            [['ad_type_id', 'sim_card_type_id'], 'required'],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['sim_card_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SimCard::className(), 'targetAttribute' => ['sim_card_type_id' => 'id']],
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
            'sim_card_type_id' => 'نوع سیم کارت',
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
    public function getSimCardType()
    {
        return $this->hasOne(SimCard::className(), ['id' => 'sim_card_type_id']);
    }
}