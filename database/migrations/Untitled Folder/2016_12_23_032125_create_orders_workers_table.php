<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersWorkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders_workers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('workersType_id')->unsigned();
			$table->integer('number');
			$table->timestamps();

			$table->foreign('order_id')
                  ->references('id')->on('orders')->onDelete('cascade');

			$table->foreign('workersType_id')
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
		Schema::drop('orders_workers');
	}

}
