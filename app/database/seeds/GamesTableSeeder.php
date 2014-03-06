<?php

class GamesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating

		DB::table('games')->truncate();

		$games = array(
			array('name'=>'pathfinder','longname'=>'Pathfinder Roleplaying Game','description'=>'Hor dor 20'),

		);

		// Uncomment the below to run the seeder
		//DB::table('games')->insert($games);

		foreach($games as $game){
			Game::create($game);
		}
	}

}
