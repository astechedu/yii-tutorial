<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%students}}`.
 */
class m231028_070023_add_position_column_to_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%students}}', 'name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%students}}', 'name');
    }
}
