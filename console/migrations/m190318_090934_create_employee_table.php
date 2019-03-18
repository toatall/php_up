<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m190318_090934_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(255)->notNull(),
            'date_birthday' => $this->date(),
            'city' => $this->string(255),
            'date_start_work' => $this->date(),
            'experience' => $this->integer(),
            'position' => $this->string(255),
            'department_number' => $this->integer(),
            'email' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employee}}');
    }
}
