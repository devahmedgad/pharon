<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Drivers;
use App\Cars;
class CarsCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cars = Cars::latest('created_at')->paginate(25);
		return View('admin.cars.index',compact('cars'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin.cars.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Cars::create($request->all());
		return redirect()->to(Url('cars'));
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
		$cars = Cars::findOrFail($id);
		return View('admin.cars.edit',compact('cars'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$cars = Cars::findOrFail($id);
		$cars->update($request->all());
		return redirect()->to(Url('cars'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cars = Cars::findOrFail($id);
		$cars->delete();
		return redirect()->to(Url('cars'));

	}

}
