@extends('app')

@section('content')

	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais - Unidades: Alteração</h3>
		    </div>
		</div>

	    {!! Form::model($material_unit, ['route' => ['material_units.update', $material_unit->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	        @include('material_units.form')

	    {!! Form::close() !!}
	    
	</div>

@endsection