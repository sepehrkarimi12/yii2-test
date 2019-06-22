<?php

namespace backend\modules\category_ad_type\models;

use Yii;
use backend\modules\ad_type\models\AdType;
use common\models\Category;

/**
 * This is the model class for table "tbl_category_ad_type".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $ad_type_id
 *
 * @property TblAdType $adType
 * @property TblCategory $cat
 */
class CategoryAdType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category_ad_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'ad_type_id'], 'required'],
            [['cat_id', 'ad_type_id'], 'integer'],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
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
            'ad_type_id' => 'Ad Type ID',
        ];
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
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['id' => 'cat_id']);
    }
}
