<?php

use yii\db\Migration;

class m160402_201052_users extends Migration
{
    public function up()
    {
        $this->createTable('users',[
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'last_name' => $this->string(),
                'password' => $this->string()->notNull(),
                'created_at' => $this->datetime()->notNull(),
                'updated_at' => $this->datetime(),
            ]);
    }

    public function down()
    {
        echo "m160402_201052_users reverted.\n";

        $this->dropTable('users');
        // return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
