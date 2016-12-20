@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/workers/create" class="btn btn-success">عامل جديد</a>
		<br><br>
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>اسم العامل</th>
				<th></th>
			</thead>
		</table>
	@endsection
@stop