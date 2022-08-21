<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 */
class m220516_114912_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'link' => $this->string(255)->notNull(),
            'position' => $this->integer()->notNull(),
            'order_by' => $this->integer()->notNull(),
            'parent' => $this->integer()->null(),
            'status' => $this->tinyInteger()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('menu');
    }
}
