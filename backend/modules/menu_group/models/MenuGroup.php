<?php

namespace backend\modules\menu_group\models;

use Yii;

/**
 * This is the model class for table "tbl_menu_group".
 *
 * @property int $id
 * @property string $title
 * @property string $code
 *
 * @property TblMenu[] $tblMenus
 */
class MenuGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_menu_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'code'], 'required'],
            [['title', 'code'], 'string', 'max' => 100],
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
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblMenus()
    {
        return $this->hasMany(TblMenu::className(), ['group_id' => 'id']);
    }
}
