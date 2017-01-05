<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('client_name');
			$table->string('phone1');
			$table->string('phone2');
			$table->text('address_from');
			$table->text('address_to');
			$table->integer('floor_from');
			$table->integer('floor_to');
			$table->integer('rooms_number');
			$table->integer('is_elevator');
			$table->integer('is_wide_stares');
			$table->integer('is_throupass');
			$table->date('order_date');
			$table->time('order_time');
			$table->decimal('discount');
			$table->string('discount_reson');
			$table->decimal('plus');
			$table->string('plus_reson');
			$table->integer('status');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
