<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Carbon\Carbon;
use App;
abstract class Controller extends BaseController {
	use DispatchesCommands, ValidatesRequests;
	public function __construct()
	{
		setlocale(LC_TIME, 'Arabic');
		App::setlocale('ar');
		Carbon::setlocale('ar');
		Carbon::setWeekStartsAt(Carbon::SATURDAY);
		Carbon::setWeekEndsAt(Carbon::FRIDAY);
	}
}
