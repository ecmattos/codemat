<div class="form-group {{ $errors->has('mat_cod') ? 'has-error' : '' }}">
	<label for="mat_cod" class="col-lg-2 control-label">Código:</label>
	<div class="col-lg-3">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('mat_cod', $value = null, array('class' => 'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('mat_desc') ? 'has-error' : '' }}">
	<label for="mat_desc" class="col-lg-2 control-label">Descrição:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('mat_desc', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_especificacao" class="col-lg-2 control-label">Especificação:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::textarea('mat_especificacao', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_referencia" class="col-lg-2 control-label">Referências:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('mat_referencia', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_unid_id" class="col-lg-2 control-label">Unidade:</label>
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_unid_id', $material_units, $value = null, ['id'=>'mat_unit_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_classe_id" class="col-lg-2 control-label">Grupo:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_classe_id', $material_groups, null, ['id'=>'mat_group_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_tipo_id" class="col-lg-2 control-label">Tipo:</label>
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_tipo_id', $material_types, $value = null, ['id'=>'mat_type_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="mat_sit_id" class="col-lg-2 control-label">Situação:</label>
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('mat_sit_id', $material_statuses, $value = null, ['id'=>'mat_status_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group  {{ $errors->has('mat_vlr_ult_aquis') ? 'has-error' : '' }}">
	<label for="mat_vlr_ult_aquis" class="col-lg-2 control-label">R$ Unitário:</label>
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-money"></i></span>
			{!! Form::text('mat_vlr_ult_aquis', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="submit" class="col-sm-2 control-label"></label>
		<div class="form-group col-sm-4">
			<button type="submit" class="btn btn-success">Confirmar <i class="fa fa-check"></i></button>
			<a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar <i class="fa fa-times"></i></a>
		</div>
</div>

@section('scripts')
	<script type="text/javascript">
	  	$('#mat_unit_list, #mat_group_list, #mat_type_list, #mat_status_list').select2(
	  		{
	  			theme: "classic"
	  		});
	</script>
@endsection