<?php

use yii\db\Migration;

class m160402_202236_comments extends Migration
{
    public function up()
    {
        $this->createTable('comments',[
                'id' => $this->primaryKey(),
                'user_id' => $this->integer()->notNull(),
                'story_id' => $this->integer()->notNull(),
                'text' => $this->text()->notNull(),
                'created_at' => $this->datetime()->notNull(),
                'updated_at' => $this->datetime(),
            ]);
    }

    public function down()
    {
        echo "m160402_202236_comments reverted.\n";
        $this->dropTable('comments');
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
