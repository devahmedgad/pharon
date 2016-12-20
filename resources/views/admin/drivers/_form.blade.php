<div class="col-md-12">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', 'اسم السائق') !!}
	    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>
</div>

<div class="col-md-12">
	<div class="form-group{{ $errors->has('nickName') ? ' has-error' : '' }}">
	    {!! Form::label('nickName', 'اسم الشهره') !!}
	    {!! Form::text('nickName', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('nickName') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('phone_number1') ? ' has-error' : '' }}">
	    {!! Form::label('phone_number1', 'رقم التيليفون 1') !!}
	    {!! Form::text('phone_number1', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('phone_number1') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('phone_number2') ? ' has-error' : '' }}">
	    {!! Form::label('phone_number2', 'رقم التيليفون 2') !!}
	    {!! Form::text('phone_number2', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('phone_number2') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('phone_number3') ? ' has-error' : '' }}">
	    {!! Form::label('phone_number3', 'رقم التيليفون 3') !!}
	    {!! Form::text('phone_number3', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('phone_number3') }}</small>
	</div>
</div>


<div class="col-md-6">
	<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	    {!! Form::label('username', 'اسم المستخدم') !!}
	    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('username') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	    {!! Form::label('password', 'كلمه المرور') !!}
	    {!! Form::password('password', ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('password') }}</small>
	</div>
</div>

<div class="col-md-4 ">
	<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
	    {!! Form::label('img', 'صوره السائق') !!}
	    {!! Form::file('img',['class'=>'btn btn-default']) !!}
	    <small class="text-danger">{{ $errors->first('img') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('license_img') ? ' has-error' : '' }}">
	    {!! Form::label('license_img', 'صوره الرخصه') !!}
	    {!! Form::file('license_img',['class'=>'btn btn-default']) !!}
	    <small class="text-danger">{{ $errors->first('license_img') }}</small>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('id_img') ? ' has-error' : '' }}">
	    {!! Form::label('id_img', 'صوره البطاقه') !!}
	    {!! Form::file('id_img',['class'=>'btn btn-default']) !!}
	    <small class="text-danger">{{ $errors->first('id_img') }}</small>
	</div>
</div>

<div class="col-md-3 col-md-offset-2">
	<div class="form-group{{ $errors->has('birth_certificate_img') ? ' has-error' : '' }}">
	    {!! Form::label('birth_certificate_img', 'صوره شهاده الميلاد') !!}
	    {!! Form::file('birth_certificate_img',['class'=>'btn btn-default']) !!}
	    <small class="text-danger">{{ $errors->first('birth_certificate_img') }}</small>
	</div>
</div>

<div>
	<div class="form-group{{ $errors->has('wasl_img') ? ' has-error' : '' }}">
	    {!! Form::label('wasl_img', 'صوره وصل كهرباء و مياه') !!}
	    {!! Form::file('wasl_img',['class'=>'btn btn-default']) !!}
	    <small class="text-danger">{{ $errors->first('wasl_img') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('license_expire_data') ? ' has-error' : '' }}">
	    {!! Form::label('license_expire_data', 'تاريخ انتهاء الرخصه') !!}
	    {!! Form::input('date','license_expire_data', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('license_expire_data') }}</small>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group{{ $errors->has('date_of_hiring') ? ' has-error' : '' }}">
	    {!! Form::label('date_of_hiring', 'تاريخ التعيين') !!}
	    {!! Form::input('date','date_of_hiring', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('date_of_hiring') }}</small>
	</div>
</div>
