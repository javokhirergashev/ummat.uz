<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%menu}}`.
 */
class m220524_081620_add_name_en_column_to_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'name_en', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('menu', 'name_en');
    }
}
