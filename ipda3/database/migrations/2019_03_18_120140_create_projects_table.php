<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('detail');
			$table->string('name');
			$table->string('image');
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}