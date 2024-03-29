<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	public function up()
	{
		Schema::create('jobs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('detail');
		});
	}

	public function down()
	{
		Schema::drop('jobs');
	}
}