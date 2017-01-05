@extends('admin.layout')
	@section('content')
		<a href="{{Url('/')}}/pricing/create" class="btn btn-success">
			إضافه جديد
		</a>
		<br><br>

		<div class="panel panel-primary">
			<div class="panel-heading text-center">قائمه التسعير</div>
			<div class="panel-body">
				@if(count($prices) > 0)
					<table class="table table-bordered">
						<thead>
							<th>#</th>
							<th>الاسم</th>
							<th>السعر</th>
							<th colspan="2">خيارات</th>
						</thead>
						@foreach($prices as $price)
						<tr>
							<td>{{$price->id}}</td>
							<td>{{$price->name}}</td>
							<td>{{$price->price}}</td>
							<td><a href="{{url('/')}}/pricing/{{$price->id}}/edit" class="btn btn-warning">تعديل</a></td>
							<td>
								{!!Form::open(['method'=>'DELETE' , 'action'=>['PricingCtrl@destroy',$price->id] ])!!}

								{!!Form::submit('حذف',['class'=>'btn btn-danger','onClick'=>'return confirm("هل انتا متأكد من حذف العنصر ؟")'])!!}

								{!!Form::close()!!}
							</td>
						</tr>
						@endforeach
					</table>
				@else
					<div class="well">
						<p>لا توجد بيانات</p>
					</div>
				@endif
			</div>
		</div>
	@endsection
@stop