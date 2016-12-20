<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Drivers;
use App\Cars;
use Validator;
use Auth;

class DriversCtrl extends Controller {

	public function __construct()
	{
		if(!Auth::admin()->get()->level > 3){
			return 'عفواً لا توجد لديك صلاحيه لزياره هذه الصفحه';
		}
	}

	private function rules($type, $id = null) {
        /* Make rules inputs by type parameter with ID */
        return [
            'name' 		=> 'required',
            'username' 	=> ($type == 'add') ? 'required|alphanum|unique:drivers' : "required|alphanum|unique:drivers,username,$id",
            'password' 	=> ($type == 'add') ? 'required' : '',
        ];
    }

	public function index()
	{
		$drivers = Drivers::latest('created_at')->paginate(25);
		return View('admin.drivers.index',compact('drivers'));
	}

	public function create()
	{
		return View('admin.drivers.create');
	}

	public function store(Request $request)
	{
		$validation = Validator::make($request->all(), $this->rules('add'));
		if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
		}
		$request->merge(['password'=>bcrypt($request->password)]);
		
		$this->upload($request);

		Drivers::create($request->all());
		return redirect()->to('drivers')->with(['msg'=>'تم إضافه السائق بنجاح']);
	}


	public function edit($id)
	{
		$driver = Drivers::findOrFail($id);
		return View('admin.drivers.edit',compact('driver'));
	}

	public function update($id,Request $request)
	{

		$driver = Drivers::findOrFail($id);
		$validation = Validator::make($request->all(), $this->rules('edit',$id));
		if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
		}
		
		$this->upload($request);
		$data = $request->except('password');
		if($request->has('password') && $request->password != '')
		{
			$password = bcrypt($request->password);
			$request->merge(['password'=>$password]);
			$data = $request->all();
		}
		
		$driver->update($data);
		return redirect()->to('drivers')->with(['msg'=>'تم تعديل بيانات السائق بنجاح']);
	}

	public function destroy($id)
	{
		$driver = Drivers::findOrFail($id);
		$driver->delete();
		return redirect()->to('drivers')->with(['msg'=>'تم حذف السائق بنجاح']);
	}

	public function upload(Request $request)
	{
		$dest = 'uploads/drivers';
		if($request->hasFile('img')){
			$file = $request->file('img');
			$file_name = time()."_image.".$request->file('img')->getClientOriginalExtension();
			$file->move($dest,$file_name);
			$request->merge(['image'=>$file_name]);
		}
		if($request->hasFile('license_img')){
			$file = $request->file('license_img');
			$file_name = time()."_license_img.".$request->file('license_img')->getClientOriginalExtension();
			$file->move($dest,$file_name);
			$request->merge(['license_image'=>$file_name]);
		}
		if($request->hasFile('id_img')){
			$file = $request->file('id_img');
			$file_name = time()."_id_img.".$request->file('id_img')->getClientOriginalExtension();
			$file->move($dest,$file_name);
			$request->merge(['id_image'=>$file_name]);
		}
		if($request->hasFile('birth_certificate_img')){
			$file = $request->file('birth_certificate_img');
			$file_name = time()."_birth_image.".$request->file('birth_certificate_img')->getClientOriginalExtension();
			$file->move($dest,$file_name);
			$request->merge(['birth_certificate_image'=>$file_name]);
		}
		if($request->hasFile('wasl_img')){
			$file = $request->file('wasl_img');
			$file_name = time()."_wasl_img.".$request->file('wasl_img')->getClientOriginalExtension();
			$file->move($dest,$file_name);
			$request->merge(['wasl_image'=>$file_name]);
		}	
		
	}
}