@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: tipos - Inclusão</h3>
		<a href="{{ route('material_types') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(['url'=>'material_types', 'class'=>'form-horizontal', 'role'=>'form']) !!}
			
			@include('material_types.partials.form')

		{!! Form::close() !!}
	</div>
@endsection