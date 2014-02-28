<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('GamesTableSeeder');
		$this->call('CharactersTableSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('StatsTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('AbilitiesTableSeeder');
	}

}
