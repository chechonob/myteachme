<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->truncateTables(array('users','password_resets','tickets','ticket_comments','ticket_comment_likes','ticket_votes','ticket_categories'));

		$this->call('UserTableSeeder');
		$this->call('TicketTableSeeder');
		$this->call('TicketVoteTableSeeder');
		$this->call('TicketCommentTableSeeder');
	}

	//vacio las tablas q voy a crear en los seeders
	private function truncateTables($tables)
	{
		$this->checkForeignKeys(true);

		foreach ($tables as $table) {
			DB::table($table)->truncate();
		}

		$this->checkForeignKeys(false);
	}

	private function checkForeignKeys($check)
	{

		$check = $check ? '0':'1';

		DB::statement("SET FOREIGN_KEY_CHECKS = $check");
	}
}
