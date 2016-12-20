
						<div class="form-group">
							<label class="col-md-4 control-label">الإسم</label>
							<div class="col-md-6">
								{!! Form::text('full_name',null,['class'=>'form-control'])!!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">البريد الإلكترونى</label>
							<div class="col-md-6">
								{!! Form::email('email',null,['class'=>'form-control'])!!}
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">اسم المستخدم</label>
							<div class="col-md-6">
								{!! Form::text('username',null,['class'=>'form-control'])!!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">كلمه المرور</label>
							<div class="col-md-6">
								{!! Form::password('password',['class'=>'form-control'])!!}
								@if(@$help)
								{!!$help!!}
								@endif
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									{!! $text !!}
								</button>
							</div>
						</div>
					</form>