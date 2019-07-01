<?php

namespace frontend\modules\other_rent\models;

use backend\modules\ad_advertiser\models\AdAdvertiser;
use backend\modules\ad_type\models\AdType;
use backend\modules\created_year\models\CreatedYear;
use backend\modules\room\models\Room;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "tbl_other_rent".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $area
 * @property int $ad_type_id
 * @property int $ad_advertiser_id
 * @property int $deposit
 * @property int $rent_value
 * @property int $room_count_id
 * @property int $created_year_id
 *
 * @property TblAdAdvertiser $adAdvertiser
 * @property TblAd $ad
 * @property TblAdType $adType
 * @property TblCreatedYear $createdYear
 * @property TblRoom $roomCount
 */
class OtherRent extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_other_rent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'area', 'ad_type_id', 'ad_advertiser_id', 'deposit', 'rent_value', 'room_count_id', 'created_year_id'], 'integer'],
            [['area', 'ad_type_id', 'ad_advertiser_id', 'room_count_id'], 'required'],
            [['ad_advertiser_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdAdvertiser::className(), 'targetAttribute' => ['ad_advertiser_id' => 'id']],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['created_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => CreatedYear::className(), 'targetAttribute' => ['created_year_id' => 'id']],
            [['room_count_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_count_id' => 'id']],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad_id' => 'Ad ID',
            'area' => 'Area',
            'ad_type_id' => 'Ad Type ID',
            'ad_advertiser_id' => 'Ad Advertiser ID',
            'deposit' => 'Deposit',
            'rent_value' => 'Rent Value',
            'room_count_id' => 'Room Count ID',
            'created_year_id' => 'Created Year ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdAdvertiser()
    {
        return $this->hasOne(TblAdAdvertiser::className(), ['id' => 'ad_advertiser_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAd()
    {
        return $this->hasOne(TblAd::className(), ['id' => 'ad_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdType()
    {
        return $this->hasOne(TblAdType::className(), ['id' => 'ad_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedYear()
    {
        return $this->hasOne(TblCreatedYear::className(), ['id' => 'created_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomCount()
    {
        return $this->hasOne(TblRoom::className(), ['id' => 'room_count_id']);
    }
}
