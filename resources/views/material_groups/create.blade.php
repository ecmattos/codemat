@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: grupos - Inclusão</h3>
		<a href="{{ route('material_groups') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(['url'=>'material_groups', 'class'=>'form-horizontal', 'role'=>'form']) !!}
			
			@include('material_groups.partials.form')

		{!! Form::close() !!}
	</div>
@endsection