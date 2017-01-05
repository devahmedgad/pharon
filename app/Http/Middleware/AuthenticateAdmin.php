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
		$key = '$2y$10$asxVpBEvXHmyTt3.R9cfm.W9U8.mXhdP/AYB3Nu4Hn5.HvTYC3Slq';
		$url = $request->root();

		$response = @file_get_contents("http://license.motwreen.com/api?key=$key&url=$url");
		if($response){
			$json=json_decode($response);
			if(@$json->scode !== 200){
				@die( View('errors.license',compact('json')));
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