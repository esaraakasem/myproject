<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->integer('phone');
			$table->string('name');
			$table->string('catogery');
			$table->string('city');
			$table->string('neighborhood');
			$table->integer('phone1');
			$table->string('password');
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}