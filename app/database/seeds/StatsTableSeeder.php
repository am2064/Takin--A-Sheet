<?php

class StatsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('stats')->truncate();

		$stats = array(
			array('name'=>'Stronk','owner_id'=>'1','score'=>'10','bonus'=>'0'),

		);

		// Uncomment the below to run the seeder
		//DB::table('stats')->insert($stats);

		foreach($stats as $stat){
			Stat::create($stat);
		}
	}

}
