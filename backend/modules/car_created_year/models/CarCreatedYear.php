<?php

namespace backend\modules\car_created_year\models;

use Yii;

/**
 * This is the model class for table "tbl_car_created_year".
 *
 * @property int $id
 * @property string $title
 */
class CarCreatedYear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_car_created_year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 15],
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
