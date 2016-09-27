<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lost', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description')->nullable();
			$table->string('image', 45)->nullable();
			$table->integer('user id')->nullable()->index('fk_user');
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
		Schema::drop('lost');
	}

}
