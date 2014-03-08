<?php

class AbilitiesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('abilities')->truncate();

		$abilities = array(
		);

		// Uncomment the below to run the seeder
		//DB::table('abilities')->insert($abilities);
		foreach($abilities as $ability){
			Ability::create($ability);
		}
	}

}
