<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190930_135218_create_user_table extends Migration
{
    public function up(){
        $this->createTable('user1', [
            'id'=>$this->primaryKey(),
            'email'=>$this->string(100),
            'password'=>$this->string(255)
        ]);
    }
    public function down(){
        $this->dropTable('user1');
    }
}
