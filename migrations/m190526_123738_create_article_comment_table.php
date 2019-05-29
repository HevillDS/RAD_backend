<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_comment}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%article}}`
 */
class m190526_123738_create_article_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_comment}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article' => $this->integer(),
            'status' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-article_comment-user_id}}',
            '{{%article_comment}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-article_comment-user_id}}',
            '{{%article_comment}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `article`
        $this->createIndex(
            '{{%idx-article_comment-article}}',
            '{{%article_comment}}',
            'article'
        );

        // add foreign key for table `{{%article}}`
        $this->addForeignKey(
            '{{%fk-article_comment-article}}',
            '{{%article_comment}}',
            'article',
            '{{%article}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-article_comment-user_id}}',
            '{{%article_comment}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-article_comment-user_id}}',
            '{{%article_comment}}'
        );

        // drops foreign key for table `{{%article}}`
        $this->dropForeignKey(
            '{{%fk-article_comment-article}}',
            '{{%article_comment}}'
        );

        // drops index for column `article`
        $this->dropIndex(
            '{{%idx-article_comment-article}}',
            '{{%article_comment}}'
        );

        $this->dropTable('{{%article_comment}}');
    }
}
