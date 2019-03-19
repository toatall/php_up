<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_window}}`.
 */
class m190320_035529_create_order_window_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_window}}', [
            'id' => $this->primaryKey(),
            'width' => $this->smallInteger()->notNull(),
            'height' => $this->smallInteger()->notNull(),
            'count_cell' => $this->smallInteger()->notNull(),
            'count_sash' => $this->smallInteger()->notNull(),
            'count_turning' => $this->smallInteger()->notNull(),
            'color' => $this->string(),
            'sill' => $this->boolean()->defaultValue(0),
            'email' => $this->string()->notNull(),
            'full_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_window}}');
    }
}
