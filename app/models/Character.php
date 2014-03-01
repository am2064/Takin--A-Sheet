<?php

class Character extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function inventory(){
		return $this->hasMany('Item','owner_id');
	}

	public function stats(){
		return $this->hasMany('Stat','owner_id');
	}

	public function skills(){
		return $this->hasMany('Skill','owner_id');
	}

	public function abilities(){
		return $this->hasMany('Ability','owner_id');
	}

	public function weapons(){
		return $this->hasMany('Weapon','owner_id');
	}

	public function armors(){
		return $this->hasMany('Armor','owner_id');
	}

	public function spells(){
		return $this->hasMany('Spell','owner_id');
	}

	public function game(){
		return $this->belongsTo('Game','game_id');
	}

	public function owner(){
		return $this->belongsTo('User','owner_id');
	}
}
