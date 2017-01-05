<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pricing;

class PricingCtrl extends Controller {

	public function index()
	{
		$prices = Pricing::latest()->paginate();
		return View('admin.pricing.index',compact('prices'));
	}

	public function create()
	{
		return View('admin.pricing.create');
	}

	public function store(Request $request)
	{
		Pricing::create($request->all());
		return redirect()->to(url('pricing'));
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$prices = Pricing::findOrFail($id);
		return View('admin.pricing.edit',compact('prices'));
	}

	
	public function update($id,Request $request)
	{
		$prices = Pricing::findOrFail($id);
		$prices->update($request->all());
		return redirect()->to(url('pricing'));
	}

	public function destroy($id)
	{
		$prices = Pricing::findOrFail($id);
		$prices->delete();
		return redirect()->to(url('pricing'));
	}

}
