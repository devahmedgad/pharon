@extends('admin.layout')
	@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading"> تعديل اوردر </div>
			<div class="panel-body">
				{!! Form::model($order,['method' => 'PATCH', 'action' => ['OrdersCtrl@update',$order->id], 'class' => 'form-horizontal']) !!}
					@include('admin.orders._form',['type'=>'edit'])
				{!! Form::close() !!}
			</div>
		</div>
	@endsection
@stop