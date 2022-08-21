<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonials}}`.
 */
class m220518_144203_create_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testimonials', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'comment' => $this->text()->notNull(),
            'images' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('testimonials');
    }
}
