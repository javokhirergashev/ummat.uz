<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $addres
 * @property string|null $email
 * @property string|null $first_phone
 * @property string|null $second_phone
 * @property string|null $third_phone
 * @property string|null $telegram_link
 * @property string|null $instagram_link
 * @property string|null $facebook_link
 * @property string|null $tweetter_link
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['addres'], 'required'],
            [['addres'], 'string'],
            [['email', 'first_phone', 'second_phone', 'third_phone', 'telegram_link', 'instagram_link', 'facebook_link', 'tweetter_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addres' => 'Addres',
            'email' => 'Email',
            'first_phone' => 'First Phone',
            'second_phone' => 'Second Phone',
            'third_phone' => 'Third Phone',
            'telegram_link' => 'Telegram Link',
            'instagram_link' => 'Instagram Link',
            'facebook_link' => 'Facebook Link',
            'tweetter_link' => 'Tweetter Link',
        ];
    }
}
