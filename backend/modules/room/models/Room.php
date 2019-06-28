<?php

namespace backend\modules\room\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_room".
 *
 * @property int $id
 * @property string $title
 *
 * @property TblApartmentRent[] $tblApartmentRents
 */
class Room extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 20],
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
        return $this->hasMany(TblApartmentRent::className(), ['room_count_id' => 'id']);
    }
}
