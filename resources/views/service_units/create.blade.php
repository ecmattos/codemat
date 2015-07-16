@extends('app')

@section('content')
	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Unidades de Atendimento - Inclusão</h3>
		    </div>
		</div>

	    {!! Form::open(['route' => 'service_units.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	        @include('service_units.form')

	    {!! Form::close() !!}

	</div>
@endsection