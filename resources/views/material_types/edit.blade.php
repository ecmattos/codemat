@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: tipos - Alteração</h3>
		<a href="{{ route('material_types') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(array('route' => array('material_types.update', $material_type->id), 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form')) !!}
			
			@include('material_types.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection