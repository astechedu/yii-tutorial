<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%post}}`.
 */
class m231029_174154_add_position_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%post}}', 'position', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%post}}', 'position');
    }
}
