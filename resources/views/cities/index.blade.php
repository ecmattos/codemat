@extends('app')

@section('content')
	<div class="container"> 
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Cidades</h3>
		       	<div class="pull-right">
		    		{!! Form::open(['route' => 'cities', 'method' => 'GET', 'class' => 'form-inline pull-right', 'role' => 'search']) !!}
			  			<div class="form-group">
			    			{!! Form::text('search_name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
			  			</div>
				  		<button type="submit" class="btn btn-primary">Buscar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<table class="table table-bordered table-striped"> 
			<thead>
				<tr>
					<th width="1%"><a href="{!! route('cities.create') !!}"><i class="fa fa-file-o"></i></a></th>
					<th width="2%">UF</th>
					<th>Descrição</th>					
					<th width="1%">#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cities as $city)
			        <tr>
			        	<td><a href="{{ route('cities.edit', ['id' => $city->id]) }}"><i class='fa fa-edit'></i></a></td>
			        	<td>{{ $city->state->uf }}</td>
			        	<td>{{ $city->cidade_nome }}</td>
			        	<td><a href="{{ route('cities.destroy', ['id'=>$city->id]) }}" onclick="return confirm('Tem certeza que deseja excluir ?')"><i class='fa fa-trash-o'></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection