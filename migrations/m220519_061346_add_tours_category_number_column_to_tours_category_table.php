<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours_category}}`.
 */
class m220519_061346_add_tours_category_number_column_to_tours_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours_category', 'tours_category_number', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours_category', 'position');
    }
}
