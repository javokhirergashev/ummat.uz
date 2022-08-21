<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $images
 * @property int|null $status
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment_uz', 'comment_en', 'comment_ru'], 'required'],
            [['comment_uz','comment_ru','comment_en'], 'string'],
            [['status'], 'integer'],
            [['name', 'email', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'comment_uz' => 'Comment Uz',
            'comment_ru' => 'Comment Ru',
            'comment_en' => 'Comment En',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
