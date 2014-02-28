<?php

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('items')->truncate();

		$items = array(
			array('name'=>'Fokin Sord','owner_id'=>'1','amount'=>'1','bonus'=>'2','description'=>'Wow this is shit'),

		);

		// Uncomment the below to run the seeder
		//DB::table('items')->insert($items);

		foreach($items as $item){
			Item::create($item);
		}
	}

}
