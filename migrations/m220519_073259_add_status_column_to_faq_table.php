<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%faq}}`.
 */
class m220519_073259_add_status_column_to_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('faq', 'status', $this->tinyInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('faq', 'status');
    }
}
