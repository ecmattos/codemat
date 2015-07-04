@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: situações - Alteração</h3>
		<a href="{{ route('material_statuses') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(array('route' => array('material_statuses.update', $material_status->id), 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form')) !!}
			
			@include('material_statuses.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection