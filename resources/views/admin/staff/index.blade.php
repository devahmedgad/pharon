@extends('admin.layout')
	@section('content')

		<a href="{{Url('/')}}/staff/create" class="btn btn-success">أضافه موظف جديد</a>
		<br><br>
		<div class="panel panel-primary">
			<div class="panel-heading text-center">الموظفين</div>
			<div class="panel-body">
			@if(count($staff) > 0)
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>الإسم</th>
						<th colspan="2">خيارات</th>
					</thead>
					@foreach($staff as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->full_name}}</td>
							<td><a href="{{Url('/')}}/staff/{{$user->id}}/edit" class="btn btn-warning">تعديل</a></td>
							<td>
								{!!Form::open(['method'=>'DELETE','action'=>['StaffCtrl@destroy',$user->id]])!!}
									{!!Form::submit('حذف',['class'=>'btn btn-danger','onClick'=>'return confirm("هل انتا متأكد من حذف الموظف ؟");'])!!}
								{!!Form::close()!!}
							</td>
						</tr>
					@endforeach
				</table>
				{!!$staff->render()!!}
			@else
			<div class="well">لا يوجد موظفين</div>
			@endif
			</div>
		</div>
	@endsection
@stop