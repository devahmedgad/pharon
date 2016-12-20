<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('nickName');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->string('image');
			$table->string('license_image');
			$table->string('id_image');
			$table->string('birth_certificate_image');
			$table->string('wasl_image');
			$table->date('license_expire_data');
			$table->date('date_of_hiring');
			$table->string('phone_number1');
			$table->string('phone_number2');
			$table->string('phone_number3');
			$table->string('national_id');
			$table->rememberToken();	
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
		Schema::drop('drivers');
	}

}
