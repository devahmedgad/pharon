@extends('admin.layout')
@section('title')
		المديرين 
@endsection
	@section('content')
	<a href="{!!Url('/')!!}/admins/create" class="btn btn-success">إضافه مدير جديد</a>
	<br>
	<br>
	<div class="panel panel-primary">
		<div class="panel-heading text-center">المديرين</div>
		<div class="panel-body">
		<table class="table table-bordered table-striped">
			<thead>
				<th>#</th>
				<th>الاسم</th>
				<th>البريد الالكترونى</th>
				<th colspan="2">خيارات</th>
			</thead>
			<tbody>
				@foreach($admins as $admin)
				<tr>
					<td>{!! $admin->id !!}</td>
					<td>{!! $admin->full_name !!}</td>
					<td>{!! $admin->email !!}</td>
					<td>
						<a href="{!!Url('/')!!}/admins/{!! $admin->id !!}/edit" class="btn btn-warning">تعديل</a></td>

					<td>
						{!! Form::open(['method' => 'DELETE', 'action' =>['AdminsCtrl@destroy',$admin->id], 'class' => 'form-horizontal']) !!}
							{!! Form::submit('حذف', ['class' => 'btn btn-danger','onClick'=>'return confirm("هل انت متأكد من حذف المدير")']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
	@endsection
@stop