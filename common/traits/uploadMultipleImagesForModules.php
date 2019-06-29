<?php

namespace common\traits;

use common\models\Image;
use Yii;
use yii\web\UploadedFile;

trait uploadMultipleImagesForModules {
/**
 * upload images and save as model for modules
 * remember that you have to add this line to your rule method in model of module :
 * [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
 */
    public $imageFiles;
    public $advertiserModel;

    public function uploadFiles($ad_id)
    {
        $transaction = Yii::$app->db->beginTransaction();
        try {
            foreach ($this->imageFiles as $index => $file) {
                $address = 'uploads/' . $ad_id . '_' . $file->basename . '_' . time() . '.' . $file->extension;
                $file->saveAs($address);
//                save images in image table
                $img_model = new Image();
                $img_model->ad_id = $ad_id;
                $img_model->address = $address;
                $img_model->save();
//                save the first picture as org_pic of adModel
                if ($index === array_key_first($this->imageFiles)) {
                    $this->advertiserModel->org_pic = $address;
                }
            }
//            save thr count of loaded pictures
            $this->advertiserModel->pic_counts = count($this->imageFiles);
            $this->advertiserModel->update();
            $transaction->commit();
        }
        catch (\Exception $e) {
            return false;
        }
    }

    public function beforeSave($runValidation = true, $attributeNames = NULL)
    {
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $this->advertiserModel->save();
//            upload images
            $this->imageFiles = UploadedFile::getInstances($this, 'imageFiles');
            if (!empty($this->imageFiles)) {
                $this->uploadFiles($this->advertiserModel->id);
            }
//            set ad_id to current model
            $this->ad_id = $this->advertiserModel->id;
            $transaction->commit();
            return true;
        }
        catch (\Exception $e) {
            return false;
        }
    }

}