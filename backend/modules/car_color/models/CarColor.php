<?php

namespace backend\modules\car_color\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_car_color".
 *
 * @property int $id
 * @property string $title
 */
class CarColor extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_car_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
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
}
