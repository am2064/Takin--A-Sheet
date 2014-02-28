<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
			array('name'=>'user','password'=>Hash::make('password')),
		);

		// Uncomment the below to run the seeder
		//DB::table('users')->insert($users);

		foreach($users as $user){
			User::create($user);
		}
	}

}
