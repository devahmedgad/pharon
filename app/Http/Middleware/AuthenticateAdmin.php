<?php namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\AssignedCars;
use Carbon\Carbon;
use Session;

class AuthenticateAdmin {
	protected $auth;
	public function __construct(Request $request)
	{
		$this->auth = Auth::admin();
		$key = '$2y$10$PfDwQn2n83XIbIgPtneqX.C/2WVsMnBCjEb5rvg71dHjSs47O8gyG';
		$url = $request->root();

		$response = @file_get_contents("http://lsicense.motwreen.com/api?key=$key&url=$url");
		if($response){
			$json=json_decode($response);
			if(@$json->scode !== 200){
				@die( View('errors.license',compact('json')));
			}
		}


		if(!Session::has('skipAssign'))
		{
			$count = AssignedCars::whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->count();
			if($count == 0 && !$request->is('assignCars') && !$request->is('skipAssign')){
				 die(header('location: assignCars')) ;
			}
		}



	}
	
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('login');
			}
		}
		return $next($request);
	}
}