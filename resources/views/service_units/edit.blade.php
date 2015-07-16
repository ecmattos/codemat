@extends('app')

@section('content')

	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Unidades de Atendimento - Alteração</h3>
		    </div>
		</div>

	    {!! Form::model($service_unit, ['route' => ['service_units.update', $service_unit->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	        @include('service_units.form')

	    {!! Form::close() !!}
	    
	</div>

@endsection
