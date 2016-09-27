<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user detail', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('user id')->nullable()->index('fk_user_user_detail');
			$table->string('first name', 45)->nullable();
			$table->string('last name', 45)->nullable();
			$table->string('address', 45)->nullable();
			$table->integer('phone no')->nullable();
			$table->integer('country_id')->nullable()->index('fk.country');
			$table->integer('state_id')->nullable()->index('fk_state_user_detail');
			$table->integer('zone_id')->nullable()->index('fk.zone');
			$table->integer('district_id')->nullable()->index('fk.district');
			$table->string('locality', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user detail');
	}

}
