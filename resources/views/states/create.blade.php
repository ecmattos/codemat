@extends('app')

@section('content')
	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Estados: Inclusão</h3>
		    </div>
		</div>

	    {!! Form::open(['route' => 'states.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	        @include('states.form')

	    {!! Form::close() !!}

	</div>
@endsection
