<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThematicTable extends Migration {

	public function up()
	{
		Schema::create('thematic', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('order');
		});
	}

	public function down()
	{
		Schema::drop('thematic');
	}
}