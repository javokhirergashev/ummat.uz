<?php

use yii\db\Migration;

/**
 * Class m220524_085446_rename_faq_column_migration
 */
class m220524_085446_rename_faq_column_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('faq','question','question_uz');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220524_085446_rename_faq_column_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220524_085446_rename_faq_column_migration cannot be reverted.\n";

        return false;
    }
    */
}
