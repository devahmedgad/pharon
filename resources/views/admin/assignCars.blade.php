<?php
use App\AssignedCars;
use Carbon\Carbon;

?>
@extends('admin.layout')
	@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">تسجيل السيارات</div>
			<div class="panel-body">
				@if(count($errors) > 0)
		            <div class="alert alert-danger">
		            <!-- {{Lang::get('assets.error')}}<br><br>-->
		                <ul>
		                    @foreach ($errors->all() as $error)
		                    <li>{{$error}}</li>
		                    @endforeach
		                </ul>
		            </div>
	            @endif
			{!! Form::open(['method' => 'POST', 'action' => 'HomeController@postAssign']) !!}
				<table class="table table-bordered table-striped">
					<thead>
						<th>السياره</th>
						<th>السائق</th>
					</thead>
					@foreach($cars as $car)
					<tr>
						<th width="25%"><h4>{{$car->name}}</h4></th>
						<td>
							<div class="form-group{{ $errors->has($car->id) ? ' has-error' : '' }}">
							@if($type != 'edit')
							    {!! Form::select($car->id, $drivers, null, ['id' => $car->id, 'class' => 'form-control', 'required' => 'required']) !!}
						  	@else
						  		<select class="form-control"  name="{{$car->id}}" id="">
						  			@foreach($drivers as $id=>$name)
						  				<option {{(@AssignedCars::whereBetween('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->where('car_id',$car->id)->first()->driver_id == $id) ? 'selected="selected" ':''}} value="{{$id}}">{{$name}}</option>
						  			@endforeach
						  		</select>
						  	@endif
							    <small class="text-danger">{{ $errors->first($car->id) }}</small>
							</div>
						</td>

					</tr>
					@endforeach
				</table>
			        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
			        <a href="{{Url('skipAssign')}}" class="btn btn-danger">تخطى</a>
			{!! Form::close() !!}
			</div>
		</div>
	@endsection
@stop