<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model {

	protected $table = 'workers';
	protected $fillable = ['name','phone','region','type_id'];

	public function type()
	{
		return $this->belongsTo('App\WorkersTypes','type_id','id');
	}
}
