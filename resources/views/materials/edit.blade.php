@extends('app')

@section('content')

	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais - Alteração</h3>
		    </div>
		</div>

	    {!! Form::model($material, ['route' => ['materials.update', $material->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	        @include('materials.form')

	    {!! Form::close() !!}
	    
	</div>

@endsection
