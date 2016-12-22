@extends('admin.layout')
	@section('content')
		
		{!! Form::open(['method' => 'POST', 'action' => 'PricingCtrl@store', 'class' => 'form-horizontal']) !!}
			@include('admin.pricing._form')	
		{!! Form::close() !!}



	@endsection
@stop