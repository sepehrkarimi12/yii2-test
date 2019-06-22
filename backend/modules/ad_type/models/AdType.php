<?php

namespace backend\modules\ad_type\models;

use Yii;

/**
 * This is the model class for table "tbl_ad_type".
 *
 * @property int $id
 * @property string $title
 *
 * @property TblCategoryAdType[] $tblCategoryAdTypes
 */
class AdType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_ad_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 70],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCategoryAdTypes()
    {
        return $this->hasMany(TblCategoryAdType::className(), ['ad_type_id' => 'id']);
    }
}
