<?php
	Route::get('login','HomeController@Login');	
	Route::post('login','HomeController@doLogin');	

	Route::group(['middleware'=>'authAdmin'],function(){

		Route::get('/','HomeController@index');
		Route::resource('admins','AdminsCtrl');
		Route::resource('drivers','DriversCtrl');
		Route::resource('cars','CarsCtrl');
		Route::get('logout','HomeController@Logout');
		

		Route::resource('workerTypes','WorkersTypeCtrl');
		Route::resource('workers','workersCtrl');
		Route::resource('staff','StaffCtrl');
		Route::resource('pricing','PricingCtrl');


		Route::resource('orders','OrdersCtrl');
		Route::resource('traffic','TrafficCtrl');
		Route::get('traffic/{id}/assign','TrafficCtrl@assign');
		Route::get('traffic/{id}/cancel','TrafficCtrl@cancel_order');
		Route::get('traffic/assign/{id}/cancel','TrafficCtrl@cancel_assign');

		
	});

	/*Route::get('hash/{key}',function($key)
	{
		return bcrypt($key);
	});
*/