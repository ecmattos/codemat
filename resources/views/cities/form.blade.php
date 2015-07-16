<div class="form-group">
	<label for="uf_id" class="col-lg-2 control-label">UF:</label>
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('uf_id', $states, $value = null, ['id'=>'state_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('cidade_nome') ? 'has-error' : '' }}">
	<label for="cidade_nome" class="col-lg-2 control-label">Descrição:</label>
	<div class="col-lg-6">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('cidade_nome', $value = null, ['class'=>'form-control']) !!}
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
	  	$('#state_list').select2(
	  		{
	  			theme: "classic"
	  		});
	</script>
@endsection