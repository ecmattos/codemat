<div class="form-group {{ $errors->has('ua_cod') ? 'has-error' : '' }}">
	<label for="ua_cod" class="col-lg-2 control-label">Código:</label>
	<div class="col-lg-3">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_cod', $value = null, array('class' => 'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('ua_desc') ? 'has-error' : '' }}">
	<label for="ua_desc" class="col-lg-2 control-label">Descrição:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_desc', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_uf_id" class="col-lg-2 control-label">UF:</label>
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('ua_uf_id', $states, $value = null, ['id'=>'state_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_cidade_id" class="col-lg-2 control-label">Cidade:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			<select id="city_list" name="ua_cidade_id" class="form-control" required="required">
				<option value=""></option> 	
			</select>
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_logradouro" class="col-lg-2 control-label">Logradouro:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::textarea('ua_logradouro', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_nr_predial" class="col-lg-2 control-label">Nr predial:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_nr_predial', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_complemento" class="col-lg-2 control-label">Complemento:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_complemento', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_bairro" class="col-lg-2 control-label">Bairro:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_bairro', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_cep" class="col-lg-2 control-label">CEP:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_cep', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_fone" class="col-lg-2 control-label">Fone:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_fone', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_fax" class="col-lg-2 control-label">fax:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_fax', $value = null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ua_email" class="col-lg-2 control-label">email:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('ua_email', $value = null, ['class'=>'form-control']) !!}
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
	  	$('#state_list1, #city_list').select2(
	  		{
	  			theme: "classic"
	  		});

	  	$('#state_list').on('change', function(e)
	  		{
	  			var ua_uf_id = e.target.value;

	  			//ajax
	  			$.get('/cities/state/' + ua_uf_id, function(data)
		  			{
		  				//success data
		  				$('#city_list').empty();
		  				$.each(data, function(index, cityObj)
		  					{	
		  						$('#city_list').append('<option value="'+ cityObj.id +'">'+ cityObj.cidade_nome +'</option>');
		  					});
		  			});
	  		});
	</script>
@endsection