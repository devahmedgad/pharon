@extends('admin.layout')
	@section('content')
		
		{!! Form::model($prices,['method' => 'PATCH', 'action' => ['PricingCtrl@update',$prices->id], 'class' => 'form-horizontal']) !!}
			@include('admin.pricing._form')	
		{!! Form::close() !!}



	@endsection
@stop