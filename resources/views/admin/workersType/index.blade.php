@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/workerTypes/create" class="btn btn-success">إضافه نوع جديد</a>
		
		<br>
		<br>

		@if(count($types) > 0)
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>الأسم</th>
				<th>سعر العامل الواحد</th>
				<th colspan="2">خيارات</th>
			</thead>
			@foreach($types as $type)
				<tr>
					<td>{{$type->id}}</td>
					<td><a href="{{Url('/')}}/workerTypes/{{$type->id}}">{{$type->name}}</a></td>

					<td>{{$type->unit_price}}</td>
					<td><a href="{{Url('/')}}/workerTypes/{{$type->id}}/edit" class="btn btn-warning">تعديل</a></td>
					<td>
						{!! Form::open(['method'=>'delete' , 'action'=>['WorkersTypeCtrl@destroy',$type->id] ]) !!}
							{!! Form::submit('حذف',['class'=>'btn btn-danger','onClick'=>'return confirm("هل انتا متأكد من حذف المجموعه ؟")']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</table>
		@else
			<div class="well"> لا يوجد مجموعات </div>
		@endif

	@endsection
@stop