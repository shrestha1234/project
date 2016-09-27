<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user detail', function(Blueprint $table)
		{
			$table->foreign('country_id', 'fk.country')->references('id')->on('country')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('district_id', 'fk.district')->references('id')->on('district')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk.zone')->references('id')->on('zone')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('state_id', 'fk_state_user_detail')->references('id')->on('state')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user id', 'fk_user_user_detail')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user detail', function(Blueprint $table)
		{
			$table->dropForeign('fk.country');
			$table->dropForeign('fk.district');
			$table->dropForeign('fk.zone');
			$table->dropForeign('fk_state_user_detail');
			$table->dropForeign('fk_user_user_detail');
		});
	}

}
