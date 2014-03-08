<?php

class GamesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating

		DB::table('games')->truncate();

		$games = array(
			array('name'=>'generic','longname'=>'This Game Does not Exist','description'=>'Literally Nothing'),
			array('name'=>'pathfinder','longname'=>'Pathfinder Roleplaying Game','description'=>"The Pathfinder Roleplaying Game is a fantasy role-playing game (RPG) that was first published in 2009 by Paizo Publishing. It extends and modifies the Revised 3rd edition Dungeons & Dragons (D&D) game rules published by Wizards of the Coast under the Open Game License. Pathfinder RPG is intended to be backward-compatible with D&D version 3.5, while addressing some of its issues."),
			array('name'=>'microlite20','longname'=>'Microlite20', 'description'=>"A trimmed-down, subminiature version of the Primary Fantasy SRD rules (see license for more info) that has been designed to be quick and easy to play. The goal was to create a simpler game, but one where all of the resources of Primary Fantasy SRD (monsters, spells, adventures and equipment) could be used without conversion."),
			array('name'=>'warhammer40k','longname'=>'Warhammer 40,000 Roleplay', 'description'=>"Warhammer 40,000 Roleplay is a role-playing game system with multiple source books for the Warhammer 40,000 universe. The first game using the system, Dark Heresy, was created by Black Industries, which folded up soon after the initial release. Official support is continued by Fantasy Flight Games.")
		);

		// Uncomment the below to run the seeder
		//DB::table('games')->insert($games);

		foreach($games as $game){
			Game::create($game);
		}
	}

}
