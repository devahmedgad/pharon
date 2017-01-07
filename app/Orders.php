<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

	protected $table = 'orders' ;
	protected $fillable = ["order_day","order_date","order_time","totalOrder","client_name","phone1","phone2","address_from","address_to","floor_from","floor_to","elevator","wide_stares","passthru","bedroom","kidroom","dinnerroom","neesh","bofue","antreh","salon","living","rokna","kitchen","office","library","cartoons","cases","fridge","deep_freezer","wacher","cocker","dish_wacher","heater","tv","condiner","microwave","nagaf","carpet","martb","tables","shoser","workers","workers_plus","car","car_plus","carpenter_num","carpenter","kitchen_worker_num","kitchen_worker","nagaf_worker_num","nagaf_worker","condiner_tech_num","condiner_tech","casing_num","casing","total","notes","status"];

	public function workers()
	{
		return $this->hasMany('App\OrdersWorkers','order_id','id');
	}

	public function items()
	{
		return $this->hasMany('App\OrdersItems','order_id','id');
	}

}
