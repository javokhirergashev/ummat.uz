<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%faq}}`.
 */
class m220524_085121_add_question_ru_column_to_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('faq', 'question_ru', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('faq', 'question_ru');
    }
}
