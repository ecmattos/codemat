@extends('app')

@section('content')
	<div class="container"> 
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Estados</h3>		    
			</div>
		</div>
				
		<table class="table table-bordered table-striped">
		    <thead>
		        <th width="1%"><a href="{!! route('states.create') !!}"><i class="fa fa-file-o"></i></a></th>
		        <th width="2%">UF</th>
		        <th>Descrição</th>
		        <th width="1%">#</th>
		    </thead>
		    <tbody>
		    @foreach($states as $state)
		        <tr>
		            <td>
		                <a href="{!! route('states.edit', [$state->id]) !!}"><i class="fa fa-edit"></i></a>
		            </td>
		            <td>{!! $state->uf !!}</td>
		            <td>{!! $state->nome !!}</td>
		            <td>
		                <a href="{!! route('states.destroy', [$state->id]) !!}" onclick="return confirm('Tem certeza que deseja excluir ?')"><i class="fa fa-trash-o"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
	</div>
@endsection