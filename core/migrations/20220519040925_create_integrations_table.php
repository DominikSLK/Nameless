<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateIntegrationsTable extends AbstractMigration
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
        $table = $this->table('nl2_integrations');

        $table
            ->addColumn('name', 'string', ['length' => 32])
            ->addColumn('enabled', 'boolean', ['default' => true])
            ->addColumn('can_unlink', 'boolean', ['default' => true])
            ->addColumn('required', 'boolean', ['default' => false])
            ->addColumn('order', 'integer', ['length' => 11, 'default' => 0]);

        $table->create();
    }
}
