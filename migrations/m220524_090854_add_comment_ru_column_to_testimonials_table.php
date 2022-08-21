<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%testimonials}}`.
 */
class m220524_090854_add_comment_ru_column_to_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testimonials', 'comment_ru', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('testimonials', 'comment_ru');
    }
}
