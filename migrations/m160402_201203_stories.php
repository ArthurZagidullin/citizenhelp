<?php

use yii\db\Migration;

class m160402_201203_stories extends Migration
{
    public function up()
    {
        $this->createTable('stories',[
                'id' => $this->primaryKey(),
                'user_id' => $this->integer()->notNull(),
                'title' => $this->string()->notNull(),
                'text' => $this->text()->notNull(),
                'created_at' => $this->datetime()->notNull(),
                'updated_at' => $this->datetime(),
            ]);
    }

    public function down()
    {
        echo "m160402_201203_stories reverted.\n";
        
        $this->dropTable('stories');

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
