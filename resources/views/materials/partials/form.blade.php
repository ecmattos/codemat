<div class="form-group {{ $errors->has('mat_cod') ? 'has-error' : '' }}">
	{!! Form::label('mat_cod', 'Código:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-3">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			{!! Form::text('mat_cod', $value = null, array('class' => 'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
		{!! $errors->first('mat_cod', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('mat_desc') ? 'has-error' : '' }}">
	{!! Form::label('mat_desc', 'Descrição:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-question-mark"></i></span>
			{!! Form::text('mat_desc', $value = null, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_desc', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('mat_especificacao', 'Especificação:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::textarea('mat_especificacao', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label('mat_referencia', 'Referências:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('mat_referencia', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label('mat_unid_id', 'Unidade:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_unid_id', $material_units, $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label('mat_classe_id', 'Grupo:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_classe_id', $material_groups, null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label('mat_tipo_id', 'Tipo:', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_tipo_id', $material_types, $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group  {{ $errors->has('mat_vlr_ult_aquis') ? 'has-error' : '' }}">
	{!! Form::label('mat_vlr_ult_aquis', 'Valor Unitário (R$):', ['class'=>'control-label col-sm-2']) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('mat_vlr_ult_aquis', null, ['class'=>'form-control']) !!}
		</div>
		{!! $errors->first('mat_vlr_ult_aquis', '<span class="help-block">:message</span>') !!}
	</div>
</div>

<div class="form-group">
	{!! Form::submit('Confirmar', ['class'=>'btn btn-primary btn-submit form-control']) !!}
</div>