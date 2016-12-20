@extends('admin.layout')
	@section('content')
	<style>
		a:hover {
			text-decoration: none;
		}
	</style>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>مديرين</h1>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>موظفين</h1>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>سائقين</h1>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>سيارات</h1>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>أوردرات</h1>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{url('/')}}/admins">
				<div class="thumbnail text-center">
					<h1> <i class="glyphicon glyphicon-asterisk"></i></h1>
					<h1>حسابات و إحصائيات</h1>
				</div>
			</a>
		</div>

	@endsection
@stop