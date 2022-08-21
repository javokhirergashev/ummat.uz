<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%faq}}`.
 */
class m220524_085318_add_answer_en_column_to_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('faq', 'answer_en', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('faq', 'answer_en');
    }
}
