<?php

namespace backend\modules\category_model_address\models;

use common\models\Category;
use Yii;

/**
 * This is the model class for table "tbl_category_model_address".
 *
 * @property int $id
 * @property int $cat_id
 * @property string $model_address
 *
 * @property TblCategory $cat
 */
class CategoryModelAddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category_model_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'model_address'], 'required'],
            [['cat_id'], 'integer'],
            [['model_address'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'model_address' => 'Model Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(TblCategory::className(), ['id' => 'cat_id']);
    }
}
