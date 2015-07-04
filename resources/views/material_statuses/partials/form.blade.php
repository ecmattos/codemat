<div class="form-group {{ $errors->has('mat_sit') ? 'has-error' : '' }}">
	{!! Form::label('mat_sit', 'Código:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_sit', $value = $material_status->mat_sit, array('class'=>'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
		{!! $errors->first('mat_sit', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('mat_sit_desc') ? 'has-error' : '' }}">
	{!! Form::label('mat_sit_desc', 'Descrição:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_sit_desc', $value = $material_status->mat_sit_desc, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_sit_desc', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::submit('Confirmar', ['class'=>'btn btn-primary btn-submit form-control']) !!}
</div>
