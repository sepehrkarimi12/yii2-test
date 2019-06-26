<?php

namespace backend\modules\city_range\models;

use backend\modules\city\models\City;
use Yii;

/**
 * This is the model class for table "tbl_city_range".
 *
 * @property int $id
 * @property string $title
 * @property int $city_id
 *
 * @property TblAd[] $tblAds
 * @property TblCity $city
 */
class CityRange extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_city_range';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'city_id'], 'required'],
            [['city_id'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
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
            'city_id' => 'City ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAds()
    {
        return $this->hasMany(TblAd::className(), ['city_range_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(TblCity::className(), ['id' => 'city_id']);
    }
}
