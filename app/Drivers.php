<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model {

	protected $table = 'drivers';
	protected $fillable = ['name','nickName','username','password','image','license_image','id_image','birth_certificate_image','wasl_image','license_expire_data','date_of_hiring','phone_number1','phone_number2','phone_number3','national_id'];

	public function car()
	{
        return $this->hasOne('App\Cars','driver_id');

	}
}
