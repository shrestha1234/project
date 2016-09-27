<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessageBoxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('message box', function(Blueprint $table)
		{
			$table->foreign('box type_id', 'fk_box type_messagebox')->references('id')->on('box type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('message_id', 'fk_message_message box')->references('id')->on('message')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_user_message box')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('message box', function(Blueprint $table)
		{
			$table->dropForeign('fk_box type_messagebox');
			$table->dropForeign('fk_message_message box');
			$table->dropForeign('fk_user_message box');
		});
	}

}
