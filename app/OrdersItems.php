<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersItems extends Model {

	protected $table 	= 'orders_items';
	protected $fillable = ['order_id','item_id','number'];

}
