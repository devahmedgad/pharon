@extends('admin.layout')
	@section('content')
		<div class="col-md-12">
			<div class="well">
				<h4>تفاصيل الأوردر : </h4>
				<ul>
					<li><label for="">رقم الأوردر	: {{$order->id}}</label></li>
					<li><label for="">اسم الأوردر	: {{$order->client_name}}</label></li>
					<li><label for="">العنوان من	: {{$order->address_from}}</label></li>
					<li><label for="">العنوان إلى	: {{$order->address_to}}</label></li>
					<li><label class="text-danger">تكلفه الأوردر: 1700 جنيه</label></li>
				</ul>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="well">
				<h4>العمال : </h4>
				<ul>
					<?php $totalWorkers = 0;?>
					@foreach($OrderWorkers as $worker)
					<li><label for="">{{$worker['name']}}: {{$worker['amount']}} * {{$worker['unit_price']}} = {{$worker['total']}} </label></li>
					<?php $totalWorkers += $worker['total'];?>
					@endforeach
					<li><label class="text-danger" >الإجمالى : {{$totalWorkers}}</label></li>

				</ul>
			</div>
		</div>

		<div class="col-md-6">
			<div class="well">
				<h4>اجهزه : </h4>
				<ul>
					<?php $totalItems = 0;?>
					@foreach($OrderItems as $items)
					<li><label for="">{{$items['name']}}: {{$items['amount']}} * {{$items['unit_price']}} = {{$items['total']}} </label></li>
					<?php $totalItems += $items['total'];?>
					@endforeach
					<li><label class="text-danger" >الإجمالى : {{$totalItems}}</label></li>
					
				</ul>
			</div>
		</div>
		{!! Form::open(['method' => 'POST', 'action' => 'TrafficCtrl@store']) !!}
		
		<div class="col-md-12">
			<div class="well">
				<h4>إسناد :</h4>
				<ul class="list-unstyled container">
					<li>
						<label for="">
							   إلى {!! Form::select('assign_id', $car, null, ['id' => 'inputname', 'class' => '', 'required' => 'required']) !!}
						</label>
					</li>
					<li>
						<label for="">
							{!!Form::checkbox('',1,null,['id'=>'discount'])!!} خصم  <span class="toHide" style="display: none;"> : {!! Form::input('number','discount',null) !!} جنيه</span>
						</label>
					</li>
					<li style="display: none;">
						<label for="">
							سبب الخصم : <br>{!!Form::textarea('discount_reson',null,['rows'=>3])!!}
						</label>
					</li>
					<li>
						<label for="">
							{!!Form::checkbox('',1,null,['id'=>'plus'])!!} زياده  <span class="toHide" style="display: none;"> : {!! Form::input('number','plus',null) !!} جنيه </span>
						</label>
					</li>
					<li style="display: none;">
						<label for="">
							سبب الزياده : <br>{!!Form::textarea('plus_reson',null,['rows'=>3])!!}
						</label>
					</li>
					<li>
						<label for="">
							اخرى : <br>{!!Form::textarea('notes',null,['rows'=>3])!!}
						</label>
					</li>
			        {!! Form::hidden("total",$totalWorkers+$totalItems) !!}
			        {!! Form::hidden("order_id",$order->id) !!}
			        {!! Form::submit("إسناد", ['class' => 'btn btn-success']) !!}
				</ul>
			</div>
		</div>

		
		{!! Form::close() !!}
		@section('inlineJs')
			<script>
				$('input[type="checkbox"]').on('change',function(){
					if($(this).prop('checked') == true){
						$(this).parent().find('.toHide').show('slow');
						$(this).parent().parent().next().show('slow')
					}else{
						$(this).parent().find('.toHide').hide('slow');
						$(this).parent().parent().next().hide('slow')
					}
				});
			</script>
		@endsection
		
	@endsection
@stop