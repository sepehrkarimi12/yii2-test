<?php

namespace backend\modules\menu\models;

use backend\modules\menu_group\models\MenuGroup;
use Yii;

/**
 * This is the model class for table "tbl_menu".
 *
 * @property int $id
 * @property int $group_id
 * @property int $parent_id
 * @property string $title
 * @property string $url
 * @property int $sort
 * @property int $status
 *
 * @property TblMenuGroup $group
 * @property Menu $parent
 * @property Menu[] $menus
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'parent_id', 'sort', 'status'], 'integer'],
            [['title', 'url', 'status'], 'required'],
            [['title', 'url'], 'string', 'max' => 255],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuGroup::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
            'url' => 'Url',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(TblMenuGroup::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Menu::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['parent_id' => 'id']);
    }
}
