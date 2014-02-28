<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characters', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('owner_id');
			$table->foreign('owner_id')->references('id')->on('users');
			$table->integer('game_id');
			$table->foreign('game_id')->references('id')->on('games');
			$table->text('description');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('characters');
	}

}
