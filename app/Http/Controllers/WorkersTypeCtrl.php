<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\WorkersTypes;
use App\Workers;

class WorkersTypeCtrl extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$types = WorkersTypes::latest('created_at')->paginate(20);
		return View('admin.workersType.index',compact('types'));
	}

	
	public function create()
	{
		return View('admin.workersType.create');
		
	}

	public function store(Request $request)
	{
		WorkersTypes::create($request->all());
		return redirect()->to(Url('workerTypes'));
	}

	public function show($id)
	{
		$workers = Workers::where('type_id',$id)->latest()->paginate(20);

		return View('admin.workers.index',compact('workers','id'));
	}

	public function edit($id)
	{
		$workersType = WorkersTypes::FindOrFail($id);
		return View('admin.workersType.edit',compact('workersType'));
		
	}

	public function update($id,Request $request)
	{
		$workersType = WorkersTypes::FindOrFail($id);
		$workersType->update($request->all());
		return redirect()->to(Url('workerTypes'));

	}

	
	public function destroy($id)
	{
		$workersType = WorkersTypes::FindOrFail($id);
		$workersType->delete();
		return redirect()->back();

	}

}
