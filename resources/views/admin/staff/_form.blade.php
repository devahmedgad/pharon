<div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
    {!! Form::label('full_name', 'اسم الموظف') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('full_name') }}</small>
</div>

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username', 'اسم المستخدم') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('username') }}</small>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'البريد الإلكترونى') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'كلمه المرور') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('password') }}</small>
</div>

<div class="btn-group pull-right">
   
    {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
</div>