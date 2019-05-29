<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%article_category}}`
 */
class m190526_123156_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'content' => $this->string(),
            'image' => $this->string(),
            'user_id' => $this->integer(),
            'date' => $this->date(),
            'article_category' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-article-user_id}}',
            '{{%article}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-article-user_id}}',
            '{{%article}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `article_category`
        $this->createIndex(
            '{{%idx-article-article_category}}',
            '{{%article}}',
            'article_category'
        );

        // add foreign key for table `{{%article_category}}`
        $this->addForeignKey(
            '{{%fk-article-article_category}}',
            '{{%article}}',
            'article_category',
            '{{%article_category}}',
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
            '{{%fk-article-user_id}}',
            '{{%article}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-article-user_id}}',
            '{{%article}}'
        );

        // drops foreign key for table `{{%article_category}}`
        $this->dropForeignKey(
            '{{%fk-article-article_category}}',
            '{{%article}}'
        );

        // drops index for column `article_category`
        $this->dropIndex(
            '{{%idx-article-article_category}}',
            '{{%article}}'
        );

        $this->dropTable('{{%article}}');
    }
}
