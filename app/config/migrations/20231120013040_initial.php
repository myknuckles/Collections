<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class Initial extends AbstractMigration {
	public $autoId = false;

	/**
	 * Creating all types of collection tables
	 *
	 * @return void
	 */

	 public function change(): void {
		$this->table('movies', [
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
		])
			->addColumn('id', 'integer', [
				'autoIncrement' => true,
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addPrimaryKey(['id'])
			->addColumn('title', 'string', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('year', 'year', [
				'default' => null,
				'limit' => 4,
				'null' => true,
			])
			->addColumn('created', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => false,
			])
			->addColumn('created_by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addColumn('modified', 'datetime', [
				'default' => null,
                'limit' => null,
                'null' => true,
			])
			->addColumn('modified by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => true,
			])
			->create();

		$this->table('genres', [
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
		])
			->addColumn('id', 'integer', [
				'autoIncrement' => true,
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addPrimaryKey(['id'])
			->addColumn('name', 'string', [
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addColumn('created', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => false,
			])
			->addColumn('created by', 'integer', [
				'default' =>null,
				'limit' => 11,
				'null'=> false,
			])
			->addColumn('modified', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => true,
			])
			->addColumn('modified by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => true,
			])
			->create();

		$this->table('games', [
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
		])
			->addColumn('id', 'integer', [
				'autoIncrement' => true,
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addPrimaryKey(['id'])
			->addColumn('title', 'string', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('year', 'year', [
				'default' => null,
				'limit' => 4,
				'null' => false,
			])
			->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
			->create();

		$this->table('manga', [
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
		])
			->addColumn('id', 'integer', [
				'autoIncrement' => true,
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addPrimaryKey(['id'])
			->addColumn('title', 'string', [
				'default' => null,
				'limit' => 255,
				'null' => false,
			])
			->addColumn('year', 'year', [
				'default' => null,
				'limit' => 4,
				'null' => true,
			])
			->addColumn('created', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => false,
			])
			->addColumn('created_by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => false,
			])
			->addColumn('modified', 'datetime', [
				'default' => null,
				'limit' => null,
				'null' => true,
			])
			->addColumn('modified_by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => true,
			])
			->create();
	 }
}
