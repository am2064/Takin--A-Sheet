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
		//
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
