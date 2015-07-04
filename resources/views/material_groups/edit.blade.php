@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: situações - Alteração</h3>
		<a href="{{ route('material_groups') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(array('route' => array('material_groups.update', $material_group->id), 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form')) !!}
			
			@include('material_groups.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection