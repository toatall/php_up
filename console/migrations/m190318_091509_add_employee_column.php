<?php

use yii\db\Migration;

/**
 * Class m190318_091509_add_employee_column
 */
class m190318_091509_add_employee_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%employee}}', 'salary', $this->decimal());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%employee}}', 'salary');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190318_091509_add_employee_column cannot be reverted.\n";

        return false;
    }
    */
}
