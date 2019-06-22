<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('video');
			$table->string('title');
			$table->string('image');
			$table->string('description');
		});
	}

	public function down()
	{
		Schema::drop('videos');
	}                                                                                                                       
}
