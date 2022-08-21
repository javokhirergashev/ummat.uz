<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property string $country
 * @property string $name
 * @property string $images
 * @property int|null $status
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name', ], 'required'],
            [['status'], 'integer'],
            [['country', 'name', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'name' => 'Name',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
