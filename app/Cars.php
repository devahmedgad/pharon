<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model {

	protected $table = 'cars';
	protected $fillable = ['name','brand', 'model', 'type', 'license_number'];

}
