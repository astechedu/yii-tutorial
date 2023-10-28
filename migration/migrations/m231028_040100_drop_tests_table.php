<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%tests}}`.
 */
class m231028_040100_drop_tests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%tests}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%tests}}', [
            'id' => $this->primaryKey(),
        ]);
    }
}
