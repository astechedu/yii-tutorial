<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%role}}`.
 */
class m231028_110725_create_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20),
            'name' => $this->string(),            
        ]);
        
        
       for($i=1;$i<10;$i++){
       
        $this->insert('role', [
            'title' => 'title '.$i,
            'name' => 'name '.$i,
        ]);        
       }

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('role');
    }
}
