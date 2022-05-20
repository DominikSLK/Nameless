<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateForumsReactionsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('nl2_forums_reactions');

        $table
            ->addColumn('post_id', 'integer', ['length' => 11])
            ->addColumn('user_received', 'integer', ['length' => 11])
            ->addColumn('user_given', 'integer', ['length' => 11])
            ->addColumn('reaction_id', 'integer', ['length' => 11])
            ->addColumn('time', 'integer', ['length' => 11]);

        $table
            ->addForeignKey('post_id', 'nl2_posts', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('user_received', 'nl2_users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('user_given', 'nl2_users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('reaction_id', 'nl2_reactions', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);

        $table->create();
    }
}
