<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sponsors".
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string $images
 * @property int|null $status
 */
class Sponsors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sponsors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'link'], 'required'],
            [['status'], 'integer'],
            [['name', 'link', 'images'], 'string', 'max' => 255],
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
            'link' => 'Link',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
}
