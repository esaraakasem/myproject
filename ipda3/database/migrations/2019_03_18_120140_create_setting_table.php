<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingTable extends Migration {

	public function up()
	{
		Schema::create('setting', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instegram');
			$table->string('youtube');
			$table->string('google');
		});
	}

	public function down()
	{
		Schema::drop('setting');
	}
}