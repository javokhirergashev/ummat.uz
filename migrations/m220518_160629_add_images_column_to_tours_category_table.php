<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours_category}}`.
 */
class m220518_160629_add_images_column_to_tours_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours_category', 'images', $this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours_category', 'images');
    }
}
