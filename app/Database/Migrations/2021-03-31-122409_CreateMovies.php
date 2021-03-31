<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMovies extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' 				=> 'INT',
				'constraint'	 	=> 5,
				'unsigned' 			=> true,
				'auto_increment' 	=> true
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			],
			'description' => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			],
			'price' => [
				'type' 				=> 'INT',
				'constraint'	 	=> 5,
				'unsigned' 			=> true,
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('movies');
	}

	public function down()
	{
		$this->forge->dropTable('movies');
	}
}
