@extends('app')

@section('content')
	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais - Inclusão</h3>
		    </div>
		</div>

	    {!! Form::open(['route' => 'materials.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	        @include('materials.form')

	    {!! Form::close() !!}

	</div>
@endsection