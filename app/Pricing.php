<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model {

	protected $table = 'pricings';
	protected $fillable = ['name','price'];

}
