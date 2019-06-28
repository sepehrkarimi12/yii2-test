<?php

namespace backend\modules\ad_advertiser\models;

use backend\modules\category_ad_advertiser\models\CategoryAdAdvertiser;
use common\traits\listForDropDown;
use Yii;

/**
 * This is the model class for table "tbl_ad_advertiser".
 *
 * @property int $id
 * @property string $title
 *
 * @property TblCategoryAdAdvertiser[] $tblCategoryAdAdvertisers
 */
class AdAdvertiser extends \yii\db\ActiveRecord
{
    use listForDropDown;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_ad_advertiser';
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
    public function getTblCategoryAdAdvertisers()
    {
        return $this->hasMany(TblCategoryAdAdvertiser::className(), ['ad_advertiser_id' => 'id']);
    }

    public static function getAdAdvertisersByCategory($cat_id)
    {
        $advertisers_of_cat = CategoryAdAdvertiser::find()
            ->where(['cat_id' => $cat_id])
            ->all();

        $advertisers = [];

        foreach ($advertisers_of_cat as $advertiser) {
            $advertisers[$advertiser->adAdvertiser->id] = $advertiser->adAdvertiser->title;
        }

        return $advertisers;

    }
}
