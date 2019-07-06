<?php

namespace backend\modules\car_brand\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_car_brand".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 *
 * @property CarBrand $parent
 * @property CarBrand[] $carBrands
 */
class CarBrand extends \yii\db\ActiveRecord
{
    use listForDropDown;
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
            [['parent_id'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 70],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarBrand::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(CarBrand::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBrands()
    {
        return $this->hasMany(CarBrand::className(), ['parent_id' => 'id']);
    }
}
