<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedCars extends Model {

	protected $table = 'assigned_cars';
	protected $fillable = ['car_id','driver_id'];
}
