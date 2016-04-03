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
        
        $this->addForeignKey("FK_comments_users", "comments", "user_id", "users", "id", 'RESTRICT');
        $this->addForeignKey("FK_comments_stories", "comments", "story_id", "stories", "id", 'RESTRICT');
        // ALTER TABLE `comments`
        // ADD CONSTRAINT `FK_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
        // ADD CONSTRAINT `FK_comments_stories` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`);
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
