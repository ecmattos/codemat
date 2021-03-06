@extends('app')

@section('content')
	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais - Unidades: Inclusão</h3>
		    </div>
		</div>

	    {!! Form::open(['route' => 'material_units.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	        @include('material_units.form')

	    {!! Form::close() !!}

	</div>
@endsection
