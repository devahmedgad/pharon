<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone');
			$table->string('region');
			$table->integer('type_id')->unsigned();
			$table->timestamps();

			$table->foreign('type_id')
                ->references('id')->on('workers_types')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workers');
	}

}
