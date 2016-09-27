<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFoundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('found', function(Blueprint $table)
		{
			$table->foreign('item type_id', 'fk.itemtype')->references('id')->on('item type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user id', 'fk.user')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('found', function(Blueprint $table)
		{
			$table->dropForeign('fk.itemtype');
			$table->dropForeign('fk.user');
		});
	}

}
