<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAssignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_assigns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('assign_id')->unsigned();
			$table->decimal('discount');
			$table->string('discount_reson');
			$table->decimal('plus');
			$table->string('plus_reson');
			$table->integer('order_id')->unsigned();
			$table->text('notes');
			$table->decimal('total');
			$table->timestamps();

			$table->foreign('order_id')
                  ->references('id')->on('orders')->onDelete('cascade');
			
			$table->foreign('assign_id')
                  ->references('id')->on('assigned_cars')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_assigns');
	}

}
