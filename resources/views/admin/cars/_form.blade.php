<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'الاسم') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
    {!! Form::label('brand', 'العلامه') !!}
    {!! Form::text('brand', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('brand') }}</small>
</div>
<div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
    {!! Form::label('model', 'الموديل') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('model') }}</small>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    {!! Form::label('type', 'النوع') !!}
    {!! Form::select('type',['شاحنه','ونش','ربع نقل'], null, ['id' => 'type', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('type') }}</small>
</div>
<div class="form-group{{ $errors->has('license_number') ? ' has-error' : '' }}">
    {!! Form::label('license_number', 'رخصه السياره') !!}
    {!! Form::text('license_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('license_number') }}</small>
</div>