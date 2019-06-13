<?php

namespace common\models;

use Yii;
use common\traits\listForDropDown;
use common\traits\findParent;

/**
 * This is the model class for table "tbl_categories".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property int $sort
 * @property int $status
 */
class Category extends \yii\db\ActiveRecord
{
    use listForDropDown;
    use findParent;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','sort'],'required'],
            [['parent_id', 'sort', 'status'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }
}
