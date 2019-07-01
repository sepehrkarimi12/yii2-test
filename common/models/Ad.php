<?php

namespace common\models;

use backend\modules\city_range\models\CityRange;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tbl_ad".
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
 * @property int $immediate
 * @property int $chat
 * @property int $exchange
 * @property int $expired
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $published_at
 *
 * @property TblCategory $cat
 * @property TblCityRange $cityRange
 * @property User $user
 * @property TblApartmentRent[] $tblApartmentRents
 * @property TblGeography[] $tblGeographies
 * @property TblImage[] $tblImages
 */
class Ad extends \yii\db\ActiveRecord
{
        const SCENARIO_REQUIRED_PRICE = 'required-price';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_ad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'title', 'desc', 'mobile', 'city_id'], 'required'],
            [['price'], 'required', 'on' => self::SCENARIO_REQUIRED_PRICE],
            [['cat_id', 'city_id', 'city_range_id', 'pic_counts', 'immediate', 'chat', 'exchange', 'expired', 'user_id', 'created_at', 'updated_at', 'published_at'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['desc'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 20],
            [['mobile'], 'string', 'max' => 11],
            [['org_pic'], 'string', 'max' => 40],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['city_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityRange::className(), 'targetAttribute' => ['city_range_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['mobile'], 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'cat_id' => 'دسته بندی',
            'city_id' => 'شهر',
            'city_range_id' => 'محدوده',
            'title' => 'عنوان آگهی',
            'desc' => 'توضیح',
            'price' => 'قیمت',
            'mobile' => 'موبایل',
            'org_pic' => 'عکس اصلی',
            'pic_counts' => 'تهداد عکس ها',
            'immediate' => 'فوری',
            'chat' => 'چت',
            'exchange' => 'معافضه',
            'expired' => 'منقضی شده',
            'user_id' => 'کاربر',
            'created_at' => 'زمان ساخت',
            'updated_at' => 'زمان ویرایش',
            'published_at' => 'زمان انتشار',
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
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(TblCategory::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityRange()
    {
        return $this->hasOne(TblCityRange::className(), ['id' => 'city_range_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblApartmentRents()
    {
        return $this->hasMany(TblApartmentRent::className(), ['ad_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblGeographies()
    {
        return $this->hasMany(TblGeography::className(), ['ad_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblImages()
    {
        return $this->hasMany(TblImage::className(), ['ad_id' => 'id']);
    }
}
