<?php

namespace backend\models;

use Yii;
use backend\traits\listForDropDown;
use backend\traits\findParent;

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
}
