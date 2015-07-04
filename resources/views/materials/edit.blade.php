@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais - Alteração</h3>
		<a href="{{ route('materials') }}" class="btn btn-default"><i class='glyphicon glyphicon-list'></i></a>
		{!! Form::model($material, ['route' => ['materials.update', $material->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}
			
			@include('materials.partials.form')

		{!! Form::close() !!}
	</div>
@endsection