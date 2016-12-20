<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>شركه فرعون لنقل الأثاث</title>
	{!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')!!}
	{!! Html::style('back/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')!!}
	{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')!!}
	{!! Html::style('back/assets/admin/layout/css/custom.css')!!}
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{Url('/')}}">فرعون</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="{{(Request::is('admins*')) ? "active" : ""}}"><a href="{{Url('admins')}}">المديرين</a></li>
					<li class="{{(Request::is('drivers*'))? "active" : ""}}"><a href="{{Url('drivers')}}">سائقين</a></li>
					<li class="{{(Request::is('cars*'))   ? "active" : ""}}"><a href="{{Url('cars')}}">سيارات</a></li>
					<li class="{{(Request::is('staff*'))  ? "active" : ""}}"><a href="{{Url('staff')}}">موظفين</a></li>
					<li class="{{(Request::is('workerTypes*'))  ? "active" : ""}}"><a href="{{Url('workerTypes')}}">انواع عمال</a></li>
					<li class="{{(Request::is('workers*'))  ? "active" : ""}}"><a href="{{Url('workers')}}">عمال</a></li>
					<li class="{{(Request::is('orders*')) ? "active" : ""}}"><a href="{{Url('orders')}}">اوردرات</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> {{Auth::admin()->get()->full_name}} </a>
					<ul class="dropdown-menu">
						<li><a href="{{Url('assignCars')}}"> تسجيل السيارات اليومي <i class="fa fa-gear"></i> </a></li>
						<li><a href="{{Url('settings')}}"> إعدادت <i class="fa fa-gear"></i> </a></li>
						<li><a href="{{Url('logout')}}"> تسجيل خروج <i class="fa fa-sign-out"></i> </a></li>
					</ul>
				</li>
			</ul>		
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container" dir="rtl">
		@yield('content')
	</div>
<script src="{!!Url('/')!!}/back/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{!!Url('/')!!}/back/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="{!!Url('/')!!}/back/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{!!Url('/')!!}/back/assets/global/js/custom.js" type="text/javascript"></script>
	@yield('inlineJs')
</html>