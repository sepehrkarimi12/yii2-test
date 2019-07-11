<?php

namespace common\models\i_do_section\models;

use Yii;

/**
 * This is the model class for table "tbl_i_do_image".
 *
 * @property int $id
 * @property int $i_do_id
 * @property string $address
 *
 * @property IDoAd $iDo
 */
class IDoImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_i_do_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['i_do_id'], 'integer'],
            [['address'], 'required'],
            [['address'], 'string', 'max' => 50],
            [['i_do_id'], 'exist', 'skipOnError' => true, 'targetClass' => IDoAd::className(), 'targetAttribute' => ['i_do_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'i_do_id' => 'I Do ID',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDo()
    {
        return $this->hasOne(IDoAd::className(), ['id' => 'i_do_id']);
    }
}
