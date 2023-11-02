<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m231028_063128_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('students');
    }
}
