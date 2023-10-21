<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m231021_105209_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
