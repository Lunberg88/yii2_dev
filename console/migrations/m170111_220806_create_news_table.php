<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 * Has foreign keys to the tables:
 *
 * - `user`
 */
class m170111_220806_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50),
            'short' => $this->text(),
            'full' => $this->text(),
            'author_id' => $this->integer(10)->notNull(),
            'created_at' => $this->dateTime(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-news-author_id',
            'news',
            'author_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-news-author_id',
            'news',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-news-author_id',
            'news'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-news-author_id',
            'news'
        );

        $this->dropTable('news');
    }
}
