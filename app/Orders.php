<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

	protected $table = 'orders' 
	protected $fillable = ['client_name','phone1','phone2','address_from','address_to','floor_from','floor_to','rooms_number','is_elevator','is_wide_stares','is_throupass','order_date','order_time','discount','discount_reson','plus_reson','plus_reson','status'];
}
