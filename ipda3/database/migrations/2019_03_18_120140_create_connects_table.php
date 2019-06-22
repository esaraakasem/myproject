<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConnectsTable extends Migration {

	public function up()
	{
		Schema::create('connects', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('address');
			$table->string('email');
			$table->string('addressmessage');
			$table->string('text');
		});
	}

	public function down()
	{
		Schema::drop('connects');
	}
}