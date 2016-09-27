<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone', function(Blueprint $table)
		{
			$table->foreign('state_id', 'fk_state_zone')->references('id')->on('state')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone', function(Blueprint $table)
		{
			$table->dropForeign('fk_state_zone');
		});
	}

}
