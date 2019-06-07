<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_question".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $sort
 * @property int $status
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'status'], 'required'],
            [['text'], 'string'],
            [['sort', 'status'], 'integer'],
            [['title'], 'string', 'max' => 500],
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
            'text' => 'Text',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
