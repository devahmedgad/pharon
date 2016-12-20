<?php
	Route::get('login','HomeController@Login');	
	Route::post('login','HomeController@doLogin');	

	Route::group(['middleware'=>'authAdmin'],function(){

		Route::get('/','HomeController@index');
		Route::resource('admins','AdminsCtrl');
		Route::resource('drivers','DriversCtrl');
		Route::resource('cars','CarsCtrl');
		Route::get('logout','HomeController@Logout');
		
		Route::get('assignCars','HomeController@assignCars');
		Route::post('assignCars','HomeController@postAssign');

		Route::get('skipAssign',function()
		{
			Session::put('skipAssign','1');
			return redirect()->to(Url('/'));
		});

		Route::resource('workerTypes','WorkersTypeCtrl');
		Route::resource('workers','workersCtrl');
		


	});

	/*Route::get('hash/{key}',function($key)
	{
		return bcrypt($key);
	});
*/