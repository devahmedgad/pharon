<div class="form-group">
	{!!Form::label('الأسم')!!}
	{!!Form::text('name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('سعر العامل الواحد (بالجنيه)')!!}
	{!!Form::text('unit_price',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::submit('حفظ',['class'=>'btn btn-success'])!!}
</div>