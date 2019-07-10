<?php

namespace common\models;

use common\traits\listForDropDown;
use yii\helpers\ArrayHelper;

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
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category';
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
    public function getChildes()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    public static function getLeafs()
    {
        $leafs = self::find()->all();
        foreach ($leafs as $k => $v) {
            if ($v->childes || $v->parent_id == null) {
                unset($leafs[$k]);
            }
        }

        return $leafs;
    }

    public static function getLeafsAsDropDown()
    {
        $leafs = self::getLeafs();

        foreach($leafs as $leaf){
            $leaf->title = $leaf->parent->title.' -> '.$leaf->title;
        }

        return ArrayHelper::map($leafs,'id','title');
    }


}
