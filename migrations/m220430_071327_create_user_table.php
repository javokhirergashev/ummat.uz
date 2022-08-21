<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m220430_071327_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->unique()->notNull(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255)->null(),
            'email' => $this->string(255)->unique()->NotNull(),
            'avatar' => $this->string(255)->null(),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime()->notNull(),
            'creator' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(1) ,

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
