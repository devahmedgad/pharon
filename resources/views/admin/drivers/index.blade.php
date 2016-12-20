@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/drivers/create" class="btn btn-success">إضافه سائق جديد</a>
		<br><br>
		@if(Session::has('msg'))
			<div class="alert alert-success">
				{{Session::get('msg')}}
			</div>
		@endif
		<div class="panel panel-primary">
				<div class="panel-heading text-center">عدد السائقين :( <span style="color:#ddd">{{$drivers->count()}} </span> )</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>#</th>
							<th width="80%">الأسم</th>
							<th colspan="30">خيارات</th>
						</tr>
						@foreach($drivers as $driver)
						<tr>
							<td>{{$driver->id}}</td>
							<td>{{$driver->name}} </td>
							<td><a href="{{Url('/')}}/drivers/{{$driver->id}}/edit" class="btn btn-warning">تعديل</a></td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'action' => ['DriversCtrl@destroy',$driver->id] ]) !!}
									<button type="submit" onclick="return confirm('متأكد من حذف السائق ، سيتم محو كل بياناته دون تراجع ?')" class="btn btn-danger">حذف</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</table>
				{!! $drivers->render() !!}
				</div>
			</div>
	@endsection
@stop