@extends('admin.layout')
	@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading">تعديل موظف </div>
			<div class="panel-body">
				{!! Form::model($staff,['method' => 'PATCH', 'action' => ['StaffCtrl@update',$staff->id]]) !!}
					@include('admin.staff._form')			
				{!! Form::close() !!}
			</div>
		</div>
	@endsection
@stop