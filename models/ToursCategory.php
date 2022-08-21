<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tours_category".
 *
 * @property int $id
 * @property string $name_uz
 * @property int|null $status
 */
class ToursCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en'], 'required'],
            [['status', 'tours_category_number'], 'integer'],
            [['name_uz', 'images', 'name_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
            'name_uz' => 'Title Uzbek',
            'name_ru' => 'Title Russian',
            'name_en' => 'Title English',
            'images' => 'Image',
            'tours_category_number' => 'number of tours',
            'status' => 'Status',
        ];
    }
}
