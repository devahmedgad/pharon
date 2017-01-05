<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Orders;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;
use App\WorkersTypes;
use App\Pricing;
use App\AssignedCars;
use App\Cars;
use App\Drivers;
use App\OrderAssign;

class TrafficCtrl extends Controller {

	public function index(Request $request)
	{
		$begin = Carbon::now()->startOfWeek(); 
		$end = Carbon::now()->endOfWeek();
		$interval = new DateInterval('P1D'); 
		$daterange = new DatePeriod($begin, $interval ,$end);
		$days=['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعه','السبت'];

		$query = Orders::where('status',0)->orderBy('order_time');
		if($request->has('date')){
			$query->whereBetween('order_date',[Carbon::parse($request->date)->startOfDay(),Carbon::parse($request->date)->endOfDay()]);
		}else{
			$request->date = Carbon::now()->format("Y-m-d");
			$query->whereBetween('order_date',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()]);
		}
		$orders = $query->get();

		$assigned_query = OrderAssign::latest();
		if($request->has('date')){
			$query->whereBetween('created_at',[Carbon::parse($request->date)->startOfDay(),Carbon::parse($request->date)->endOfDay()]);
		}else{
			$query->whereBetween('order_date',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()]);
		}
		$assigned_orders = $assigned_query->get(); 

		$canceled_query = Orders::where('status',3);
		if($request->has('date')){
			$canceled_query->whereBetween('order_date',[Carbon::parse($request->date)->startOfDay(),Carbon::parse($request->date)->endOfDay()]);
		}else{
			$canceled_query->whereBetween('order_date',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()]);
		}
		$canceled_orders = $canceled_query->get();
		return View('admin.traffic.index',compact('daterange','days','request','orders','assigned_orders','canceled_orders'));
	}

	public function assign($id)
	{
		$order= Orders::findOrFail($id);
		$workers = $order->workers;
		$i = 0;
		foreach ($workers as $worker) {
			$type = WorkersTypes::find($worker->workersType_id);
			$OrderWorkers[$i]['name'] = $type->name;
			$OrderWorkers[$i]['unit_price'] = $type->unit_price;
			$OrderWorkers[$i]['amount'] = $worker->number;
			$OrderWorkers[$i]['total'] = $worker->number*$type->unit_price;
			$i++;
		}

		$items = $order->items;
		$i = 0;
		foreach ($items as $item) {
			$itemss = Pricing::find($item->item_id);
			$OrderItems[$i]['name'] = $itemss->name;
			$OrderItems[$i]['unit_price'] = $itemss->price;
			$OrderItems[$i]['amount'] = $item->number;
			$OrderItems[$i]['total'] = $item->number*$itemss->price;
			$i++;
		}

		$assignedCars = AssignedCars::today()->get();
		$i = 0;
		foreach ($assignedCars as $cars) {
				$car[$cars->id] = Cars::find($cars->car_id)->name .' ( '.Drivers::find($cars->car_id)->nickName.' )'; 
		}
		return View('admin.traffic.assign',compact('order','OrderWorkers','OrderItems','car'));
	}
	
	public function store(Request $request)
	{
	 	if(($request->total - $request->discount) + $request->plus < 0 ){
	 		return redirect()->back()->withError(['لا يمكن ان يكون نسبه الخصم اكبر من الرقم الإجمالى مع الزياده']);
	 	}	
		OrderAssign::create($request->all());
		$order= Orders::findOrFail($request->order_id);
		$order->update(['status'=>1]);
		return redirect()->to(Url('traffic'))->with(['msg'=>'تم إسناد الأوردر بنجاح']);
	}


	public function cancel_order($id)
	{
		$order= Orders::findOrFail($id);
		$order->update(['status'>3]);
		return redirect()->back();
	}

	public function cancel_assign($id)
	{
		$order_assign= OrderAssign::findOrFail($id);
		$order = Orders::findOrFail($order_assign->order_id);
		$order->update(['status'=>3]);
		$order_assign->delete();
		return redirect()->back();
	}
}
