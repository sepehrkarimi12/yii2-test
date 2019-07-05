<?php

namespace backend\modules\car_brigade\models;

use backend\modules\car_model\models\CarModel;
use Yii;

/**
 * This is the model class for table "tbl_car_brigade".
 *
 * @property int $id
 * @property string $title
 * @property int $model_id
 *
 * @property CarModel $model
 */
class CarBrigade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_car_brigade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['model_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarModel::className(), 'targetAttribute' => ['model_id' => 'id']],
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
            'model_id' => 'Model ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(CarModel::className(), ['id' => 'model_id']);
    }
}
