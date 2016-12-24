<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class AssignedCars extends Model {

	protected $table = 'assigned_cars';
	protected $fillable = ['car_id','driver_id'];

	public function scopeToday($query)
	{
		$query->whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()]);
	}

	public function car()
	{
		return $this->belongsTo('App\Cars','car_id');
	}

	public function driver()
	{
		return $this->belongsTo('App\Drivers','driver_id');
	}

}
