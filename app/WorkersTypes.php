<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkersTypes extends Model {

	protected $table = 'workers_types';
	protected $fillable = ['name','unit_price'];

}
