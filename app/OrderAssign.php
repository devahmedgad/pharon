<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAssign extends Model {

	protected $table = 'order_assigns';
	protected $fillable = ['assign_id','discount','discount_reson','plus','plus_reson','order_id','notes','total'];

	public function assignes()
	{
		return $this->belongsTo('App\AssignedCars','assign_id');
	}
}
