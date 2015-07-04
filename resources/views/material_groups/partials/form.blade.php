<div class="form-group {{ $errors->has('mat_classe_cod') ? 'has-error' : '' }}">
	{!! Form::label('mat_classe_cod', 'Código:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_classe_cod', $value = null, array('class'=>'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
		{!! $errors->first('mat_classe_cod', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('mat_classe_desc') ? 'has-error' : '' }}">
	{!! Form::label('mat_classe_desc', 'Descrição:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_classe_desc', $value = null, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_classe_desc', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::submit('Confirmar', ['class'=>'btn btn-primary btn-submit form-control']) !!}
</div>
