@extends('admin.layout')
	@section('content')

	{!! Form::model($worker,['method' => 'PATCH', 'action' => ['workersCtrl@update',$worker->id], 'class' => 'form-horizontal']) !!}
	
		@include('admin.workers._form')
		
	{!! Form::close() !!}

	@endsection
@stop