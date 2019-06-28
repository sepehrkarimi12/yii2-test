<?php

namespace backend\modules\ad_type\models;

use backend\modules\category_ad_type\models\CategoryAdType;
use common\traits\listForDropDown;

/**
 * This is the model class for table "tbl_ad_type".
 *
 * @property int $id
 * @property string $title
 *
 * @property TblCategoryAdType[] $tblCategoryAdTypes
 */
class AdType extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_ad_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 70],
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
    public function getTblCategoryAdTypes()
    {
        return $this->hasMany(CategoryAdType::className(), ['ad_type_id' => 'id']);
    }

    public static function getAdTypesByCategory($cat_id)
    {
        $types_of_cat = CategoryAdType::find()
            ->where(['cat_id' => $cat_id])
            ->all();

        $types = [];

        foreach ($types_of_cat as $type) {
            $types[$type->adType->id] = $type->adType->title;
        }

        return $types;

    }
}
