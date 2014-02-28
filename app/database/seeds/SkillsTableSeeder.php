<?php

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('skills')->truncate();

		$skills = array(
			array('name'=>'Fuck','owner_id'=>'1','bonus'=>'3')

		);

		// Uncomment the below to run the seeder
		//DB::table('skills')->insert($skills);

		foreach($skills as $skill){
			Skill::create($skill);
		}
	}

}
