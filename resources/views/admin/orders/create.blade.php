@extends('admin.layout')
	@section('content')

			{!! Form::open(['method' => 'POST', 'action' => 'OrdersCtrl@store', 'class' => 'form-horizontal']) !!}
			 	@include('admin.orders._form',['type'=>'add'])
			{!! Form::close() !!}	

	@endsection
@stop