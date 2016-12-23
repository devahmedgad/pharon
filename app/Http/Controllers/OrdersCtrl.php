<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Orders;
use App\Pricing;
use App\WorkersTypes;
use App\OrdersWorkers;
use App\OrdersItems;

class OrdersCtrl extends Controller {

	public function index()
	{
		$orders = Orders::latest()->paginate(20);
		return View('admin.orders.index',compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$worker_types = WorkersTypes::all();
		$items = Pricing::all();
		return View('admin.orders.create',compact('worker_types','items'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$orders = Orders::create($request->all());
		if($request->has('workers')){
			foreach ($request->workers as $type) {
				OrdersWorkers::create([
					'order_id'=>$orders->id,
					'workersType_id'=>$type,
					'number'=>$request->workers_number[$type],
				]);
			}
		}

		if($request->has('items')){
			foreach ($request->items as $item) {
				OrdersItems::create([
					'order_id'=>$orders->id,
					'item_id'=>$item,
					'number'=>$request->items_number[$item],
				]);
			}
		}
		return redirect()->to(url('orders'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$order = Orders::findOrFail($id);
		$order->delete();
		return redirect()->to(url('orders'));
	}

}
