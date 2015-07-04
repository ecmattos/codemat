@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: unidades - Alteração</h3>
		<a href="{{ route('material_units') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::model($material_unit, ['route' => ['material_units.update', $material_unit->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}
			
			@include('material_units.partials.form')
		
		{!! Form::close() !!}
	</div>
@endsection