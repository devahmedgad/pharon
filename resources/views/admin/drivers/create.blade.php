@extends('admin.layout')
	@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">إضافه سائق جديد</div>
		<div class="panel-body">
		<div class="col-md-12">
		{!! Form::open(['method' => 'POST', 'action' => ['DriversCtrl@store'], 'class' => 'form-horizontal','files'=>true]) !!}
			@include('admin.drivers._form')
		    <div class="btn-group pull-right">
		        {!! Form::submit("إضافه", ['class' => 'btn btn-success']) !!}
		    </div>
		{!! Form::close() !!}
		</div>

		</div>
	</div>
	@endsection
@stop