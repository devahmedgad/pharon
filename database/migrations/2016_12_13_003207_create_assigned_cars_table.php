<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assigned_cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('car_id')->unsigned()->nullable();
			$table->integer('driver_id')->unsigned()->nullable();
			$table->timestamps();
		
			$table->foreign('car_id')
                  ->references('id')->on('cars')->onDelete('cascade');
        	
        	$table->foreign('driver_id')
                  ->references('id')->on('drivers')->onDelete('cascade');
        
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assigned_cars');
	}

}
