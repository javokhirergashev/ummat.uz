<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string|null $question
 * @property string|null $answer
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_uz', 'answer_uz', 'question_ru', 'answer_ru', 'question_en', 'answer_en'], 'string'],
            [[ 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_uz' => 'Question Uz',
            'answer_uz' => 'Answer Uz',
            'question_ru' => 'Question Ru',
            'answer_ru' => 'Answer Ru',
            'question_en' => 'Question En',
            'answer_en' => 'Answer En',
            'status' => 'Status'
        ];
    }
}
