@extends('app')

@section('content')
	<div class="container"> 
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Unidades de atendimento</h3>
			</div>
		</div>

		<table class="table table-bordered table-striped"> 
			<thead>
				<tr>
					<th width="1%"><a href="{!! route('service_units.create') !!}"><i class="fa fa-file-o"></i></a></th>
					<th width="2%">Código</th>
					<th>Descrição</th>
					<th>Endereço</th>					
					<th width="1%">#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($service_units as $service_unit)
			        <tr>
			        	<td><a href="{{ route('service_units.edit', ['id' => $service_unit->id]) }}"><i class='fa fa-edit'></i></a></td>
			        	<td>{{ $service_unit->ua_cod }}</td>
			        	<td></td>
			        	<td><a href="{{ route('service_units.destroy', ['id'=>$service_unit->id]) }}" onclick="return confirm('Tem certeza que deseja excluir ?')"><i class='fa fa-trash-o'></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection