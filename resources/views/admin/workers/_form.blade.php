
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'اسم العامل') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'رقم التليفون') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('phone') }}</small>
</div>

<div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
    {!! Form::label('region', 'المنطقه') !!}
    {!! Form::text('region', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('region') }}</small>
</div>

<div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
    {!! Form::label('type_id', 'نوع العامل') !!}
    {!! Form::select('type_id',$types, @$request->type_id, ['id' => 'type_id', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('type_id') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
</div>