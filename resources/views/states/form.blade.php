<div class="form-group {{ $errors->has('uf') ? 'has-error' : '' }}">
	{!! Form::label('uf', 'UF:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('uf', null, array('class'=>'form-control', 'autofocus'=>'autofocus')) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
	{!! Form::label('nome', 'Descrição:', array('class' => 'control-label col-sm-2')) !!}
	<div class="col-lg-4">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('nome', null, ['class'=>'form-control']) !!}
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
