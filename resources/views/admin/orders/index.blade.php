@extends('admin.layout')
	@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading text-center">أوردرات</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>اسم العميل</th>
						<th>تاريخ الأوردر</th>
						<th colspan="2">خيارات</th>
					</thead>
					@foreach($orders as $order)
						<tr>
							<td>{{$order->id}}</td>
							<td>{{$order->client_name}}</td>
							<td>{{$order->order_date}}</td>
							<td><a class="btn btn-warning" href="{{Url('/')}}/orders/{{$order->id}}/edit"> تعديل </a></td>
							<td>
								{!!Form::open(['action'=>['OrdersCtrl@destroy',$order->id],'method'=>'DELETE'])!!}
								{!!Form::submit('حذف',['class'=>'btn btn-danger','onClick'=>'return confirm("هل انت متأكد من حذف هذا الأوردر ؟")'])!!}
								{!!Form::close()!!}
							</td>
						</tr>
					@endforeach
					{!! $orders->render() !!}
				</table>
			</div>
		</div>
	@endsection
@stop