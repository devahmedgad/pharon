@extends('admin.layout')
	@section('content')
		{!!Form::model($workersType,['method'=>'PATCH','action'=>['WorkersTypeCtrl@update',$workersType->id]])!!}
			@include('admin.workersType._form')
		{!!Form::close()!!}
	@endsection
@stop