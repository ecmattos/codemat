@extends('app')

@section('content')

	<div class="container">
		
		@include('common.errors')
	
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Cidades: Alteração</h3>
		    </div>
		</div>

	    {!! Form::model($city, ['route' => ['cities.update', $city->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	        @include('cities.form')

	    {!! Form::close() !!}
	    
	</div>

@endsection