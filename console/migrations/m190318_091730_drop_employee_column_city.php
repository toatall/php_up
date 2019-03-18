<?php

use yii\db\Migration;

/**
 * Class m190318_091730_drop_employee_column_city
 */
class m190318_091730_drop_employee_column_city extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%employee}}', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%employee}}', 'city', $this->string(255));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190318_091730_drop_employee_column_city cannot be reverted.\n";

        return false;
    }
    */
}
