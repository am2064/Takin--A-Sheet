<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spells', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('owner_id');
			$table->foreign('owner_id')->references('id')->on('characters');
			$table->string('damage');
			$table->integer('bonus');
			$table->text('description');
			$table->text('effect');
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
		Schema::drop('spells');
	}

}
