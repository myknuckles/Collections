<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdaptor;

class Rating extends AbstractMigration {
	public $autoID = false;

	/**
	 * Creating a rating table
	 *
	 * @return void
	 */

	 public function change(): void {
		$this->table('ratings', [
			'encoding' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
		])

			->addColumn('score', 'integer', [
				'default' => null,
				'limit' => 11,
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
			->addColumn('modified by', 'integer', [
				'default' => null,
				'limit' => 11,
				'null' => true,
			])
			->create();
	 }
}
