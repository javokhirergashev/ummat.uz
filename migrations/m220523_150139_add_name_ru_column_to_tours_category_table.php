<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours_category}}`.
 */
class m220523_150139_add_name_ru_column_to_tours_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours_category', 'name_ru', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours_category', 'name_ru');
    }
}
