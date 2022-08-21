<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hotel}}`.
 */
class m220524_181011_create_hotel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hotel', [
            'id' => $this->primaryKey(),
            'country' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'images' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hotel}}');
    }
}
