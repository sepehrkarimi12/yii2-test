<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_image".
 *
 * @property int $id
 * @property int $ad_id
 * @property string $address
 *
 * @property TblAd $ad
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id'], 'integer'],
            [['address'], 'required'],
            [['address'], 'string', 'max' => 50],
            [['ad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['ad_id' => 'id']],
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
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAd()
    {
        return $this->hasOne(TblAd::className(), ['id' => 'ad_id']);
    }
}
