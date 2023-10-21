<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%category}}`
 */
class m231021_111712_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->defaultValue(1),
            'title' => $this->string(),
            'body' => $this->text(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-blog-author_id}}',
            '{{%blog}}',
            'author_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-blog-author_id}}',
            '{{%blog}}',
            'author_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-blog-category_id}}',
            '{{%blog}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-blog-category_id}}',
            '{{%blog}}',
            'category_id',
            '{{%category}}',
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
            '{{%fk-blog-author_id}}',
            '{{%blog}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-blog-author_id}}',
            '{{%blog}}'
        );

        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-blog-category_id}}',
            '{{%blog}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-blog-category_id}}',
            '{{%blog}}'
        );

        $this->dropTable('{{%blog}}');
    }
}
