<div class="form-group {{ $errors->has('mat_unid') ? 'has-error' : '' }}">
	{!! Form::label('mat_unid', 'Unidade:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_unid', null, array('class'=>'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
		{!! $errors->first('mat_unid', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('mat_unid_desc') ? 'has-error' : '' }}">
	{!! Form::label('mat_unid_desc', 'Descrição:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicons glyphicons-circle-info"></i></span>
			{!! Form::text('mat_unid_desc', null, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_unid_desc', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::submit('Confirmar', ['class'=>'btn btn-primary btn-submit form-control']) !!}
</div>