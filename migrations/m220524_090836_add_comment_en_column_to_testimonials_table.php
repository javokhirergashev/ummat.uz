<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%testimonials}}`.
 */
class m220524_090836_add_comment_en_column_to_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testimonials', 'comment_en', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('testimonials', 'comment_en');
    }
}
