<?php

namespace backend\modules\car_brand\models;

use Yii;

/**
 * This is the model class for table "tbl_car_brand".
 *
 * @property int $id
 * @property string $title
 *
 * @property TblCarModel[] $tblCarModels
 */
class CarBrand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_car_brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 50],
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
    public function getTblCarModels()
    {
        return $this->hasMany(TblCarModel::className(), ['brand_id' => 'id']);
    }
}
