@extends('admin.layout')
	@section('content')

	{!! Form::open(['method' => 'POST', 'action' => 'workersCtrl@store', 'class' => 'form-horizontal']) !!}
		@include('admin.workers._form')
		
	{!! Form::close() !!}

	@endsection
@stop