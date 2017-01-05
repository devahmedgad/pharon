

<div class="col-md-12">
    <div class="form-group{{ $errors->has('client_name') ? ' has-error' : '' }}">
        {!! Form::label('client_name', 'اسم العميل') !!}
        {!! Form::text('client_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('client_name') }}</small>
    </div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('order_date') ? ' has-error' : '' }}">
	    {!! Form::label('order_date', 'تاريخ الأوردر') !!}
	    {!! Form::input('date','order_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('order_date') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('order_time') ? ' has-error' : '' }}">
	    {!! Form::label('order_time', 'وقت الأوردر') !!}
	    {!! Form::input('time','order_time', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('order_time') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('phone1') ? ' has-error' : '' }}">
	    {!! Form::label('phone1', 'رقم التيليفون 1') !!}
	    {!! Form::text('phone1', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('phone1') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
	    {!! Form::label('phone2', 'رقم التيليفون 2') !!}
	    {!! Form::text('phone2', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('phone2') }}</small>
	</div>
</div>

<div class="col-md-9">
	<div class="form-group{{ $errors->has('address_from') ? ' has-error' : '' }}">
	    {!! Form::label('address_from', 'العنوان : من') !!}
	    {!! Form::text('address_from', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('address_from') }}</small>
	</div>
</div>

<div class="col-md-3">
	<div class="form-group{{ $errors->has('floor_from') ? ' has-error' : '' }}">
	    {!! Form::label('floor_from', 'الدور') !!}
	    {!! Form::input('number','floor_from', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('floor_from') }}</small>
	</div>
</div>

<div class="col-md-9">
	<div class="form-group{{ $errors->has('address_to') ? ' has-error' : '' }}">
	    {!! Form::label('address_to', 'العنوان : إلى') !!}
	    {!! Form::text('address_to', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('address_to') }}</small>
	</div>
</div>

<div class="col-md-3">
	<div class="form-group{{ $errors->has('floor_to') ? ' has-error' : '' }}">
	    {!! Form::label('floor_to', 'الدور') !!}
	    {!! Form::input('number','floor_to', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('floor_to') }}</small>
	</div>
</div>

<div class="col-md-12">
	<div class="form-group{{ $errors->has('rooms_number') ? ' has-error' : '' }}">
	    {!! Form::label('rooms_number', 'عدد الغرف') !!}
	    {!! Form::text('rooms_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('rooms_number') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	    <div class="checkbox{{ $errors->has('is_elevator') ? ' has-error' : '' }}">
	        <label for="is_elevator">
	            {!! Form::checkbox('is_elevator', '1', null, ['id' => 'is_elevator']) !!} يوجد اسانسير
	        </label>
	    </div>
	    <small class="text-danger">{{ $errors->first('is_elevator') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	    <div class="checkbox{{ $errors->has('is_wide_stares') ? ' has-error' : '' }}">
	        <label for="is_wide_stares">
	            {!! Form::checkbox('is_wide_stares', '1', null, ['id' => 'is_wide_stares']) !!} السلم واسع
	        </label>
	    </div>
	    <small class="text-danger">{{ $errors->first('is_wide_stares') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
	    <div class="checkbox{{ $errors->has('is_throupass') ? ' has-error' : '' }}">
	        <label for="is_throupass">
	            {!! Form::checkbox('is_throupass', '1', null, ['id' => 'is_throupass']) !!} يوجد ممر
	        </label>
	    </div>
	    <small class="text-danger">{{ $errors->first('is_throupass') }}</small>
	</div>
</div>
<div class="col-md-12">
	<fieldset>
		<legend>عمال:</legend>
		@foreach($worker_types as $type)
			<div class="form-group">
			    <div class="checkbox{{ $errors->has('worker_'.$type->id) ? ' has-error' : '' }}">
			        <label for="worker_{{$type->id}}">
			            {!! Form::checkbox('workers[]', $type->id, (@array_key_exists($type->id,$selectedWorkers))?true:false, ['class'=>'workers','id' => 'worker_'.$type->id]) !!}{{$type->name}} ( سعر العامل الواحد : {{$type->unit_price}} جنيه ) 			        
			            </label>
			        {!!Form::input('number','workers_number['.$type->id.']',@$selectedWorkers[$type->id],['style'=>'display:none','class'=>'form-control','placeholder'=>'العدد'])!!}
			    </div>
			    <small class="text-danger">{{ $errors->first('is_throupass') }}</small>
			</div>
		@endforeach
	</fieldset>
</div>


<div class="col-md-12">
	<fieldset>
		<legend>تفاصيل:</legend>
		@foreach($items as $item)
			<div class="form-group">
			    <div class="checkbox{{ $errors->has('item_'.$item->id) ? ' has-error' : '' }}">
			        <label for="item_{{$item->id}}">
			            {!! Form::checkbox('items[]', $item->id, (@array_key_exists($item->id,$selectedItems))?true:false, ['class'=>'items','id' => 'item_'.$item->id]) !!}{{$item->name}} ( {{$item->price}} جنيه ) 			        
			            </label>
			        {!!Form::input('number','items_number['.$item->id.']',@$selectedItems[$item->id],['style'=>'display:none','class'=>'form-control','placeholder'=>'العدد'])!!}
			    </div>
			    <small class="text-danger">{{ $errors->first('is_throupass') }}</small>
			</div>
		@endforeach
	</fieldset>
</div>
<div class="btn-group pull-right">
    {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
</div>
<!-- Latest compiled and minified CSS & JS -->
@section('inlineJs')
<script type="text/javascript">
$(document).ready(function(){

	$('.workers').each(function (key,val) {
		var checks = $('.workers')
		if(checks[key].checked)
		{
			$(this).parent().parent().find('input[type="number"]').show('slow');
		}
	});

	$('.workers').on('change',function(){
		if($(this).prop('checked') == true){
			$(this).parent().parent().find('input[type="number"]').show('slow');
		}else{
			$(this).parent().parent().find('input[type="number"]').hide('slow');
		}
	});

	$('.items').each(function (key,val) {
		var items = $('.items')
		if(items[key].checked)
		{
			$(this).parent().parent().find('input[type="number"]').show('slow');
		}
	});

	$('.items').on('change',function(){
		if($(this).prop('checked') == true){
			$(this).parent().parent().find('input[type="number"]').show('slow');
		}else{
			$(this).parent().parent().find('input[type="number"]').hide('slow');
		}
	});
})
</script>
@endsection