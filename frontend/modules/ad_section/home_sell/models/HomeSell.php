<?php

namespace frontend\modules\ad_section\home_sell\models;

use backend\modules\ad_advertiser\models\AdAdvertiser;
use backend\modules\ad_type\models\AdType;
use backend\modules\created_year\models\CreatedYear;
use backend\modules\room\models\Room;
use common\models\Ad;
use common\traits\uploadMultipleImagesForModule;
use Yii;

/**
 * This is the model class for table "tbl_home_sell".
 *
 * @property int $id
 * @property int $ad_id
 * @property int $area
 * @property int $ad_type_id
 * @property int $ad_advertiser_id
 * @property int $room_count_id
 * @property int $created_year_id
 * @property string $national_code
 *
 * @property AdAdvertiser $adAdvertiser
 * @property Ad $ad
 * @property AdType $adType
 * @property CreatedYear $createdYear
 * @property Room $roomCount
 */
class HomeSell extends \yii\db\ActiveRecord
{
    use uploadMultipleImagesForModule;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_home_sell';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id', 'area', 'ad_type_id', 'ad_advertiser_id', 'room_count_id', 'created_year_id'], 'integer'],
            [['area', 'ad_type_id', 'ad_advertiser_id', 'room_count_id'], 'required'],
            [['national_code'], 'string', 'max' => 10],
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
        $model = new Ad();
        $ad = $model->attributeLabels();
        return [
            'id' => 'شناسه',
            'ad_id' => 'شناشه آگهی',
            'area' => 'متراژ',
            'ad_type_id' => 'نوع آگهی',
            'ad_advertiser_id' => 'آگهی دهنده',
            'national_code' => 'شماره ملی',
            'room_count_id' => 'تعداد اتاق خواب',
            'created_year_id' => 'سال ساخت',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedYear()
    {
        return $this->hasOne(CreatedYear::className(), ['id' => 'created_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomCount()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_count_id']);
    }
}
