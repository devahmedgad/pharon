<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersWorkers extends Model {

	protected $table = 'orders_workers';
	protected $fillable = ['order_id','workersType_id','number'];

}
