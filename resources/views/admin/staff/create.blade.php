@extends('admin.layout')
	@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading">إضافه موظف جديد</div>
			<div class="panel-body">
				{!! Form::open(['method' => 'POST', 'action' => 'StaffCtrl@store']) !!}
				
					@include('admin.staff._form')			
				{!! Form::close() !!}
			</div>
		</div>
	@endsection
@stop