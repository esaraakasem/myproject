<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->date('date');
			$table->string('text');
			$table->integer('catogery_id');
			$table->string('title');
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}