<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%faq}}`.
 */
class m220524_085256_add_answer_ru_column_to_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('faq', 'answer_ru', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('faq', 'answer_ru');
    }
}
