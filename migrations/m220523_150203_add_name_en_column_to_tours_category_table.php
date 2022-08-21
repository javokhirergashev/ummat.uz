<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours_category}}`.
 */
class m220523_150203_add_name_en_column_to_tours_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours_category', 'name_en', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours_category', 'name_en');
    }
}
