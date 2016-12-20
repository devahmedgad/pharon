@extends('admin.layout')
	@section('content')

		{!!Form::open(['action'=>'WorkersTypeCtrl@store'])!!}
			@include('admin.workersType._form')
		{!!Form::close()!!}


	@endsection
@stop