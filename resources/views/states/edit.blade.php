@extends('app')

@section('content')

	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Estados: Alteração</h3>
		    </div>
		</div>

	    {!! Form::model($state, ['route' => ['states.update', $state->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	        @include('states.form')

	    {!! Form::close() !!}
	    
	</div>

@endsection