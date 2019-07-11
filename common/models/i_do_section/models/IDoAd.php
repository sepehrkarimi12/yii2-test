<?php

namespace common\models\i_do_section\models;

use backend\modules\city_range\models\CityRange;
use backend\modules\i_do_section\i_do_category\models\IDoCategory;
use common\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tbl_i_do_ad".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $city_id
 * @property int $city_range_id
 * @property string $title
 * @property string $desc
 * @property string $price
 * @property string $mobile
 * @property string $org_pic
 * @property int $pic_counts
 * @property int $status
 * @property int $chat
 * @property int $expired
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $published_at
 *
 * @property IDoCategory $cat
 * @property CityRange $cityRange
 * @property User $user
 */
class IDoAd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_i_do_ad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'city_id', 'city_range_id', 'title', 'desc', 'mobile'], 'required'],
            [['cat_id', 'city_id', 'city_range_id', 'pic_counts', 'status', 'chat', 'expired', 'user_id', 'created_at', 'updated_at', 'published_at'], 'integer'],
            [['desc'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['price'], 'string', 'max' => 20],
            [['mobile'], 'string', 'max' => 11],
            [['org_pic'], 'string', 'max' => 40],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => IDoCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['city_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityRange::className(), 'targetAttribute' => ['city_range_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
//            [['mobile'], 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/'],
        ];
    }

    public function behaviors()
    {
        return [
//             [
//                 'class' => BlameableBehavior::className(),
//                 'createdByAttribute' => 'user_id',
//
//             ],
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status' => 'وضعیت',
            'id' => 'شناسه',
            'cat_id' => 'دسته بندی',
            'city_id' => 'شهر',
            'city_range_id' => 'محدوده آگهی',
            'title' => 'عنوان آگهی',
            'desc' => 'توضیح آگهی',
            'price' => 'قیمت',
            'mobile' => 'شماره موبایل',
            'org_pic' => 'عکس اصلی',
            'pic_counts' => 'تهداد عکس ها',
            'chat' => 'چت ' . Yii::$app->name,
            'expired' => 'منقضی شده',
            'user_id' => 'کاربر',
            'created_at' => 'زمان ساخت آگهی',
            'updated_at' => 'آخرین زمان ویرایش آگهی',
            'published_at' => 'زمان انتشار آگهی',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(IDoCategory::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityRange()
    {
        return $this->hasOne(CityRange::className(), ['id' => 'city_range_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
