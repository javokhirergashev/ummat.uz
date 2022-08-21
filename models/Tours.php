<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property int $id
 * @property string $title_uz
 * @property string|null $description_uz
 * @property int $category_id
 * @property string|null $body_uz
 * @property string $created_date
 * @property string $updated_date
 * @property int|null $seen_count
 * @property string|null $images
 * @property int|null $status
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'category_id', 'created_date', 'price', 'period', 'title_ru', 'title_en', 'description_en', 'description_ru' ], 'required'],
            [['category_id', 'seen_count', 'status'], 'integer'],
            [['body_uz', 'body_en', 'body_ru'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['title_uz', 'description_uz', 'images', 'title_ru', 'title_en', 'description_en', 'description_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uzbek',
            'title_ru' => 'Title Russian',
            'title_en' => 'Title English',
            'description_uz' => 'Description Uzbek',
            'description_ru' => 'Description Russian',
            'description_en' => 'Description English',
            'category_id' => 'Category ID',
            'body_uz' => 'Body Uzbek',
            'body_en' => 'Body English',
            'body_ru' => 'Body Russian',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'seen_count' => 'Seen Count',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
    public function getTourImage(){
        return "/uploads/tours/{$this->id}/$this->images";
    }
}
