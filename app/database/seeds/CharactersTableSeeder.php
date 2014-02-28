<?php

class CharactersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('characters')->truncate();

		$characters = array(
			array('name'=>'Hello','owner_id'=>'1','game_id'=>'1','description'=>'balls'),

		);

		// Uncomment the below to run the seeder
		//DB::table('characters')->insert($characters);

		foreach($characters as $character){
			Character::create($character);
		}
	}

}
