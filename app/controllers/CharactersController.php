<?php

class CharactersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$characters = Character::all();
		return Response::json(array
			(
				'error'=>false,
				'characters'=>$characters->toArray()
			),
			200
		);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$character = new Character();
		if(Input::has('name')) $character->name = Input::get('name');
		if(Input::has('description')) $character->description = Input::get('description');
		if(Input::has('game')) $character->game = Input::get('game');
		$character->owner = Auth::id();
		$character->save();
		if(Input::has('stats')){
			foreach(Input::get('stats') as $stat){
				$stats = new Stat();
				$stats->name = $stat['name'];
				$stats->owner_id = $character->id;
				$stats->score = $stat['score'];
				$stats->bonus = $stat['bonus'];
				$stats->save();
			}
		}     
		if(Input::has('skills')){
			foreach(Input::get('skills') as $skill){
				$skills = new Skill();
				$skills->name = $skill['name'];
				$skills->owner_id = $character->id;
				$skills->bonus = $skill['bonus'];
				$skills->save();
			}
		}    
		if(Input::has('abilities')){
			foreach(Input::get('abilities') as $ability){
				$abilities = new Ability();
				$abilities->name = $ability['name'];
				$abilities->owner_id = $character->id;
				$abilities->description = $ability['description'];
				$abilities->save();
			}
		} 
		if(Input::has('inventory')){
			foreach(Input::get('inventory') as $item){
				$inventory = new Item();
				$inventory->name = $item['name'];
				$inventory->owner_id = $character->id;
				$inventory->amount = $item['amount'];
				$inventory->bonus = $item['bonus'];
				$inventory->description = $item['description'];
				$inventory->save();
			}
		} 
		if(Input::has('weapons')){
			foreach(Input::get('weapons') as $weapon){
				$weapons = new Weapon();
				$weapons->name = $weapon['name'];
				$weapons->owner_id = $character->id;
				$weapons->damage = $weapon['damage'];
				$weapons->bonus = $weapon['bonus'];
				$weapons->description = $weapon['description'];
				$weapons->effect = $weapon['effect'];
				$weapons->save();
			}
		}   
		if(Input::has('armors')){
			foreach(Input::get('armors') as $armor){
				$armors = new Armor();
				$armors->name = $armor['name'];
				$armors->owner_id = $character->id;
				$armors->defense = $armor['defense'];
				$armors->description = $armor['description'];
				$armors->effect = $armor['effect'];
				$armors->save();
			}
		}    
		if(Input::has('spells')){
			foreach(Input::get('spells') as $spell){
				$spells = new Spell();
				$spells->name = $spell['name'];
				$spells->owner_id = $character->id;
				$spells->damage = $spell['damage'];
				$spells->bonus = $spell['bonus'];
				$spells->description = $spell['description'];
				$spells->effect = $spell['effect'];
				$spells->save();
			}
		}    

		return Response::json(array
			(
				'error'=>false,
				'message'=>'Character Created'
			),
			201
		);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$character = Character::find($id);
		$character->stats;
		$character->skills;
		$character->abilities;
		$character->inventory;
		$character->weapons;
		$character->armors;
		$character->spells;
		$character->game;
		$character->owner;
		return Response::json(array
			(
				'error'=>false,
				'character'=>$character
			),
			200
		);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
