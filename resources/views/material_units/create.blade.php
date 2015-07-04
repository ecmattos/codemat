@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: unidades - Inclusão</h3>
		<a href="{{ route('material_units') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(['url'=>'material_units', 'class'=>'form-horizontal', 'role'=>'form']) !!}
			
			@include('material_units.partials.form')
		
		{!! Form::close() !!}
	</div>
@endsection