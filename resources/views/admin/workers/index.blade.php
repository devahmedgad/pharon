@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/workers/create?type_id={{$id}}" class="btn btn-success">عامل جديد</a>
		<br><br>
		<div class="panel panel-primary">
			<div class="panel-heading text-center">عمال </div>
			<div class="panel-body">
				@if(count($workers) > 0)
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>اسم العامل</th>
						<th>نوع العامل</th>
						<th colspan="2">خيارات</th>
						@foreach($workers as $worker)
						<tr>
							<td>{{$worker->id}}</td>
							<td>{{$worker->name}}</td>
							<td>{{$worker->type->name}}</td>
							<td>
								<a href="{{Url('/')}}/workers/{{$worker->id}}/edit" class="btn btn-warning">تعديل</a></td>
							<td>
								{!! Form::open(['method'=>'delete' , 'action'=>['workersCtrl@destroy',$worker->id] ]) !!}
									{!! Form::submit('حذف',['class'=>'btn btn-danger','onClick'=>'return confirm("هل انتا متأكد من حذف العامل ؟")']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</thead>
				</table>
				{!!$workers->render()!!}
				@else
					<div class="well">لا يوجد عمال</div>
				@endif
			</div>
		</div>
	@endsection
@stop