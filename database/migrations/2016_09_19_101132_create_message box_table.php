<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageBoxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message box', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('message_id')->nullable()->index('fk_message_messagebox');
			$table->integer('user_id')->nullable()->index('fk_user_messagebox');
			$table->integer('box type_id')->nullable()->index('fk_boxtype_messagebox');
			$table->string('message body', 225)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message box');
	}

}
