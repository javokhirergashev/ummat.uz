<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours}}`.
 */
class m220523_151744_add_description_en_column_to_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours', 'description_en', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours', 'description_en');
    }
}
