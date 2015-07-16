@extends('app')

@section('content')
	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Cidades: Inclusão</h3>
		    </div>
		</div>

	    {!! Form::open(['route' => 'cities.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	        @include('cities.form')

	    {!! Form::close() !!}

	</div>
@endsection
