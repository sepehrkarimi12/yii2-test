<?php

namespace backend\modules\category_ad_advertiser\models;

use Yii;
use backend\modules\ad_advertiser\models\AdAdvertiser;
use common\models\Category;

/**
 * This is the model class for table "tbl_category_ad_advertiser".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $ad_advertiser_id
 *
 * @property TblAdAdvertiser $adAdvertiser
 * @property TblCategory $cat
 */
class CategoryAdAdvertiser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category_ad_advertiser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'ad_advertiser_id'], 'required'],
            [['cat_id', 'ad_advertiser_id'], 'integer'],
            [['ad_advertiser_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdAdvertiser::className(), 'targetAttribute' => ['ad_advertiser_id' => 'id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'ad_advertiser_id' => 'Ad Advertiser ID',
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
    public function getCat()
    {
        return $this->hasOne(TblCategory::className(), ['id' => 'cat_id']);
    }
}
