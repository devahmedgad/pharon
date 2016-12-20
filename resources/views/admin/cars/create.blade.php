@extends('admin.layout')
	@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">إضافه سياره جديده</div>
			<div class="panel-body">
				<div class="col-md-12">
					
					{!! Form::open(['method' => 'POST', 'action' => ['CarsCtrl@store'], 'class' => 'form-horizontal']) !!}
							
							@include('admin.cars._form')
					
					    <div class="btn-group pull-right">
					        {!! Form::submit("إضافه", ['class' => 'btn btn-success']) !!}
					    </div>
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	@endsection
@stop