@extends('admin.layout')
	@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">تعديل سياره</div>
			<div class="panel-body">
				<div class="col-md-12">
					
					{!! Form::model($cars,['method' => 'PATCH', 'action' => ['CarsCtrl@update',$cars->id], 'class' => 'form-horizontal']) !!}
							
							@include('admin.cars._form')
					
					    <div class="btn-group pull-right">
					        {!! Form::submit("تعديل", ['class' => 'btn btn-success']) !!}
					    </div>
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	@endsection
@stop