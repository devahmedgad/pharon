<?php use Carbon\Carbon; ?>
@extends('admin.layout')
	@section('content')
		<div class="col-md-offset-2">
			@foreach($daterange as $date)
			 <a href="{{Url('/')}}/traffic/?date={{$date->format("Y-m-d")}}" class="btn btn-{{( $date->format("Y-m-d") == $request->date)? 'danger':'default' }}">
			 	{{$days[Carbon::parse($date)->formatLocalized("%w")]}} <br>
			 	{{Carbon::parse($date)->format("Y-m-d")}} 
			 </a>
			@endforeach	
		</div>
		<br>
		<h3>أوردرات اليوم</h3>
		<hr>
		@if(count($orders)>0)
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>العميل</th>
				<th>المحمول</th>
				<th>الساعه</th>
				<th>إسناد</th>
				<th>إلغاء</th>
			</thead>
			@foreach($orders as $order)
			<tr>
				<td>{{$order->id}}</td>
				<td>{{$order->client_name}}</td>
				<td>{{$order->phone1}}</td>
				<td>{{str_replace(['pm','am'],['م','ص'],Carbon::parse($order->order_time)->format('h:i a'))}}</td>
				<td><a href="{{Url('/')}}/traffic/{{$order->id}}/assign" class="btn btn-success">إسناد</a></td>
				<td><a href="{{Url('/')}}/traffic/{{$order->id}}/cancel" class="btn btn-danger">إلغاء</a></td>
			</tr>
			@endforeach
		</table>
		@else
		<div class="well text-center">لا توجد أوردرات</div>
		@endif
		<br>
		<h3>أوردرات مسنده</h3>
		<hr>
		@if(count($assigned_orders) > 0)
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>رقم الأوردر</th>
				<th>السائق</th>
				<th>السياره</th>
				<th>التكلفه</th>
				<th>إلغاء</th>
			</thead>
			@foreach($assigned_orders as $assign)
				<tr>
					<td>{{$assign->id}}</td>
					<td>{{$assign->order_id}}</td>
					<td>{{$assign->assignes->driver->name}}</td>
					<td>{{$assign->assignes->car->name}}</td>
					<td>{{($assign->total - $assign->discount) + $assign->plus}} جنيه</td>
					<td><a href="{{Url('/')}}/traffic/assign/{{$assign->id}}/cancel">إلغاء</a></td>
				</tr>
			@endforeach
		</table>
		@else
		<div class="well text-center">لا توجد ارودرات</div>
		@endif
		<br>
		<h3>أوردرات ملغيه</h3>
		<hr>
		@if(count($canceled_orders)>0)
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>العميل</th>
				<th>المحمول</th>
				<th>الساعه</th>
				<th>إسناد</th>
				<th>إلغاء</th>
			</thead>
			@foreach($canceled_orders as $order)
			<tr>
				<td>{{$order->id}}</td>
				<td>{{$order->client_name}}</td>
				<td>{{$order->phone1}}</td>
				<td>{{str_replace(['pm','am'],['م','ص'],Carbon::parse($order->order_time)->format('h:i a'))}}</td>
				<td><a href="{{Url('/')}}/traffic/{{$order->id}}/assign" class="btn btn-success">إسناد</a></td>
				<td><a href="{{Url('/')}}/traffic/{{$order->id}}/cancel" class="btn btn-danger">إلغاء</a></td>
			</tr>
			@endforeach
		</table>
		@else
		<div class="well text-center">لا توجد أوردرات</div>
		@endif


	@endsection
@stop