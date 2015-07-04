<div class="form-group {{ $errors->has('mat_tipo') ? 'has-error' : '' }}">
	{!! Form::label('mat_tipo', 'Código:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_tipo', $value = $material_type->mat_tipo, array('class'=>'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
		{!! $errors->first('mat_tipo', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('mat_tipo_desc') ? 'has-error' : '' }}">
	{!! Form::label('mat_tipo_desc', 'Descrição:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_tipo_desc', $value = $material_type->mat_tipo_desc, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_tipo_desc', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::submit('Confirmar', ['class'=>'btn btn-primary btn-submit form-control']) !!}
</div>
