<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFoundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('found', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('description', 45)->nullable();
			$table->string('image', 45)->nullable();
			$table->integer('user id')->nullable()->index('fk.user');
			$table->integer('item type_id')->nullable()->index('fk.itemtype');
			$table->integer('date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('found');
	}

}
