<?php

namespace common\models\discount_section\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_discount_category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property int $sort
 * @property int $status
 *
 * @property DiscountCategory $parent
 * @property DiscountCategory[] $discountCategories
 */
class DiscountCategory extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_discount_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort', 'status'], 'integer'],
            [['title', 'status'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => DiscountCategory::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(DiscountCategory::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscountCategories()
    {
        return $this->hasMany(DiscountCategory::className(), ['parent_id' => 'id']);
    }
}
