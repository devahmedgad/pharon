<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Workers;
use App\WorkersTypes;

class workersCtrl extends Controller {

	public function create(Request $request)
	{
		$types = WorkersTypes::lists('name','id');
		return View('admin.workers.create',compact('types','request'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Workers::create($request->all());
		return redirect()->to(url('workerTypes').'/'.$request->type_id);
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
		$worker = Workers::findOrFail($id);
		$types = WorkersTypes::lists('name','id');
		return View('admin.workers.edit',compact('types','worker'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$worker = Workers::findOrFail($id);
		$worker->update($request->all());
		return redirect()->to(url('workerTypes').'/'.$request->type_id);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$worker = Workers::findOrFail($id);
		$worker->delete();
		return redirect()->to(url('workerTypes').'/'.$request->type_id);

	}

}
