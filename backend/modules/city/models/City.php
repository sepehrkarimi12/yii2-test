<?php

namespace backend\modules\city\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_city".
 *
 * @property int $id
 * @property string $title
 * @property int $sort
 *
 * @property TblCityRange[] $tblCityRanges
 */
class City extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['sort'], 'integer'],
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
            'sort' => 'Sort',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCityRanges()
    {
        return $this->hasMany(TblCityRange::className(), ['city_id' => 'id']);
    }
}
