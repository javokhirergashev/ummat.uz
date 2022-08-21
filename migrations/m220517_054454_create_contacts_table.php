<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m220517_054454_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'addres' => $this->text()->notNull(),
            'email' => $this->string(255)->null(),
            'first_phone' => $this->string(255)->null(),
            'second_phone' => $this->string(255)->null(),
            'third_phone' => $this->string(255)->null(),
            'telegram_link' => $this->string(255)->null(),
            'instagram_link' => $this->string(255)->null(),
            'facebook_link' => $this->string(255)->null(),
            'tweetter_link' => $this->string(255)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
    }
}
