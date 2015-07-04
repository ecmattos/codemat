@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: Situações - Inclusão</h3>
		<a href="{{ route('material_statuses') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>

		{!! Form::open(['url'=>'material_statuses', 'class'=>'form-horizontal', 'role'=>'form']) !!}
			
			@include('material_statuses.partials.form')

		{!! Form::close() !!}
	</div>
@endsection