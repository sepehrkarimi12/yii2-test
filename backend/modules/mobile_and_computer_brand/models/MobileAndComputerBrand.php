<?php

namespace backend\modules\mobile_and_computer_brand\models;

use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_mobile_brand".
 *
 * @property int $id
 * @property string $title
 */
class MobileAndComputerBrand extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mobile_and_computer_brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
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
