<?php

namespace backend\modules\created_year\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_created_year".
 *
 * @property int $id
 * @property int $title
 *
 * @property TblApartmentRent[] $tblApartmentRents
 */
class CreatedYear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_created_year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'integer'],
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
    public function getTblApartmentRents()
    {
        return $this->hasMany(TblApartmentRent::className(), ['created_year_id' => 'id']);
    }

    public static function getListForDropDown()
    {
        $all = self::find()->orderBy('Title DESC')->all();
        return ArrayHelper::map($all, 'id', 'title');
    }
}
