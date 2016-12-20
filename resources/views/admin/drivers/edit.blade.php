@extends('admin.layout')
	@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">تعديل سائق</div>
		<div class="panel-body">
		<div class="col-md-12">
		{!! Form::model($driver,['method' => 'PATCH', 'action' => ['DriversCtrl@update',$driver->id], 'class' => 'form-horizontal','files'=>true]) !!}
			@include('admin.drivers._form')
		    <div class="btn-group pull-right">
		        {!! Form::submit("تعديل", ['class' => 'btn btn-success']) !!}
		    </div>
		{!! Form::close() !!}
		</div>

		</div>
	</div>
	@endsection
@stop