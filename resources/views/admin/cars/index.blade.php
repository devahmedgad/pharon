@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/cars/create" class="btn btn-success">إضافه سياره جديده</a>
		<br><br>
		@if(Session::has('msg'))
			<div class="alert alert-success">
				{{Session::get('msg')}}
			</div>
		@endif
		<div class="panel panel-primary">
				<div class="panel-heading text-center">عدد السيارات :( <span style="color:#ddd">{{$cars->count()}} </span> )</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>#</th>
							<th width="80%">الأسم</th>
							<th colspan="30">خيارات</th>
						</tr>
						@foreach($cars as $car)
						<tr>
							<td>{{$car->id}}</td>
							<td>{{$car->name}}</td>
							<td><a href="{{Url('/')}}/cars/{{$car->id}}/edit" class="btn btn-warning">تعديل</a></td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'action' => ['CarsCtrl@destroy',$car->id] ]) !!}
									<button type="submit" onclick="return confirm('متأكد من حذف السياره ، سيتم محو كل بيناتها دون تراجع ؟')" class="btn btn-danger">حذف</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</table>
				{!! $cars->render() !!}
				</div>
			</div>
	@endsection
@stop