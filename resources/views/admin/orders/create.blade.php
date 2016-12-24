@extends('admin.layout')
	@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">اضافه اوردر جديد</div>
		<div class="panel-body">
			{!! Form::open(['method' => 'POST', 'action' => 'OrdersCtrl@store', 'class' => 'form-horizontal']) !!}
			 	@include('admin.orders._form',['type'=>'add'])
			{!! Form::close() !!}	
		</div>
	</div>
	@endsection
@stop