<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tours}}`.
 */
class m220518_113158_add_period_column_to_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tours', 'period', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tours', 'period');
    }
}
