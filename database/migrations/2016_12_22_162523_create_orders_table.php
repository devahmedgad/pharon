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
			$table->string("order_day")
			$table->date("order_date");
			$table->time("order_time");
			$table->decimal("totalOrder");
			$table->string("client_name");
			$table->string("phone1");
			$table->string("phone2");
			$table->string("address_from");
			$table->string("address_to");
			$table->integer("floor_from");
			$table->integer("floor_to");
			$table->integer("elevator");
			$table->integer("wide_stares");
			$table->integer("passthru");
			$table->integer("bedroom");
			$table->integer("kidroom");
			$table->integer("dinnerroom");
			$table->integer("neesh");
			$table->integer("bofue");
			$table->integer("antreh");
			$table->integer("salon");
			$table->integer("living");
			$table->integer("rokna");
			$table->integer("kitchen");
			$table->integer("office");
			$table->integer("library");
			$table->integer("cartoons");
			$table->integer("cases");
			$table->integer("fridge");
			$table->integer("deep_freezer");
			$table->integer("wacher");
			$table->integer("cocker");
			$table->integer("dish_wacher");
			$table->integer("heater");
			$table->integer("tv");
			$table->integer("condiner");
			$table->integer("microwave");
			$table->integer("nagaf");
			$table->integer("carpet");
			$table->integer("martb");
			$table->integer("tables");
			$table->integer("shoser");
			$table->decimal("workers");
			$table->decimal("workers_plus");
			$table->decimal("car");
			$table->decimal("car_plus");
			$table->integer("carpenter_num");
			$table->decimal("carpenter");
			$table->integer("kitchen_worker_num");
			$table->decimal("kitchen_worker");
			$table->integer("nagaf_worker_num");
			$table->decimal("nagaf_worker");
			$table->integer("condiner_tech_num");
			$table->decimal("condiner_tech");
			$table->integer("casing_num");
			$table->decimal("casing");
			$table->decimal("total");
			$table->text("notes");
			$table->integer("status");
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
