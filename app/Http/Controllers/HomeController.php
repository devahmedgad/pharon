<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\AssignedCars;
use App\Cars;
use App\Drivers;
use Carbon\Carbon;
use Auth;
use Validator;
class HomeController extends Controller {

	public function index()
	{
		return View('admin.index');
	}

	public function Login()
	{
		if(Auth::admin()->check() == true)
		{	
			return redirect()->to(Url('/'));
		}
		return View('auth.login');
	}

	public function doLogin(Request $bag)
	{
		if(Auth::admin()->check() == true)
		{	
			return redirect()->to(Url('/'));
		}
		$validator = Validator::make($bag->all(),[
			    'email'            		=> 'required|email',
				'password'        		=> 'required',
			]);
		if($validator->fails()){
			return response()->json(['scode'=>401,'errors'=>$validator->errors()->all()],202);	
		}
		
		if(Auth::admin()->attempt(['email' => $bag->email , 'password' => $bag->password ],true))	
		{
			return response()->json(['scode'=>202,'msg'=>["successfully logged in , redirecting please wait ..."]],202);	
		}
		
	}

	public function Logout()
	{
		if(Auth::admin()->check() == true)
		{	
			Auth::admin()->logout();
			return redirect()->to(Url('login'))->with(['msg'=>'تم تسجيل خروجك بنجاح']);
		}
		return redirect()->to(Url('login'));
	}

	public function assignCars()
	{
		if(!Auth::admin()->get()->level > 3){
			return 'عفواً لا توجد لديك صلاحيه لزياره هذه الصفحه';
		}
		$cars = Cars::latest()->get();
		
		$data = Drivers::latest()->get();
		$drivers[0] = 'لا يوجد سائق' ;
		
		foreach ($data as $value) {
			$drivers[$value->id] = $value->name.' ( '.$value->nickName.' ) ' ;
		}
		$type = 'add';			
		$assigned = AssignedCars::whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->get();
		if(count($assigned)>0){
			$type = 'edit';			
		}

		$showSkip = false;
		if(count($cars) == 0 && count($cars) == 0){
			$showSkip = true;
		}

		return View('admin.assignCars',compact('cars','drivers','assigned','type','showSkip'));
		//AssignedCars
	}

	public function postAssign(Request $request)
	{
		$data = $request->except('_token');
		foreach ($data as $key => $value) {
			if($data[$key] == 0){
				$assigned =  AssignedCars::where('car_id',$key)->whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->first();
				if(count($assigned) > 0){
					$assigned->update(['driver_id'	=> NULL]);
				}else{
					AssignedCars::create([
						'car_id'	=> $key,
						'driver_id'	=> NULL,
						]);
				}
				unset($data[$key]);
			}
		}

		if (count($data) !== count(array_unique($data))){
			return redirect()->back()->withErrors('لا يمكن ان يتواجد نفس السائق على اكثر من سياره')->withInput();
		}

		foreach ($data as $key => $value) {
			$assigned =  AssignedCars::where('car_id',$key)->whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->first();
			if(count($assigned) > 0){
				$assigned->update(['driver_id'	=> $value]);
			}else{
				AssignedCars::create([
					'car_id'	=> $key,
					'driver_id'	=> $value,
					]);
			}
		}
		return redirect()->to('/');
	}	

}		
