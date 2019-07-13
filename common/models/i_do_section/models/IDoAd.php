<?php

namespace common\models\i_do_section\models;

use backend\modules\city_range\models\CityRange;
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
    public $imageFiles;
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
            [['org_pic'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => IDoCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['city_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityRange::className(), 'targetAttribute' => ['city_range_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
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
            'city_range_id' => 'محدوده',
            'title' => 'عنوان',
            'desc' => 'توضیح',
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
            'imageFiles' => 'عکس',
        ];
    }

    public function uploadFiles($i_do_ad_id)
    {
        if (Yii::$app->controller->action->id == 'update') {
            $prev_images = IDoImage::findAll(['i_do_id' => $this->id]);
            foreach ($prev_images as $img) {
                unlink( $img->address);
                $img->delete();
            }
        }

        if ($this->imageFiles) {
            foreach ($this->imageFiles as $index => $file) {
                $address = 'uploads/ad_section/' . $i_do_ad_id . '_' . $index . $file->basename . '_' . time() . '.' . $file->extension;
                $file->saveAs($address);
//                save images in image table
                $img_model = new IDoImage();
                $img_model->i_do_id = $i_do_ad_id;
                $img_model->address = $address;
                $img_model->save();
//                save the first picture as org_pic of adModel
                if ($index === array_key_first($this->imageFiles)) {
                    $this->org_pic = $address;
                }
            }
//            save thr count of loaded pictures
            $this->pic_counts = count($this->imageFiles);
            $this->imageFiles = null;
        } else {
            $this->loadDefaultValues(false);
        }

        if ($this->update(false)) {
            return true;
        }

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

    public function getImages()
    {
        return $this->hasMany(IDoImage::className(), ['i_do_id' => 'id']);
    }
}
