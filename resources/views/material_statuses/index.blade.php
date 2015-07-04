@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: situações</h3>
		<a href="{{ route('material_statuses.create') }}" class="btn btn-default"><i class="glyphicon glyphicon-file"></i></a>
		<table class="table"> 
			<thead>
				<tr>
					<th>#</th>
					<th>Código</th>
					<th>Descrição</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($material_statuses as $material_status)
			        <tr>
			        	<td width='1%'><a href="{{ route('material_statuses.edit', ['id'=>$material_status->id]) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
			        	<td width='24%'>{{ $material_status->mat_sit }}</td>
			        	<td>{{ $material_status->mat_sit_desc }}</td>
			        	<td width='1%'><a href="{{ route('material_statuses.destroy', ['id'=>$material_status->id]) }}"><i class="glyphicon glyphicon-trash danger"></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection