@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: grupos</h3>
		<a href="{{ route('material_groups.create') }}" class="btn btn-default"><i class="glyphicon glyphicon-file"></i></a>
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
				@foreach($material_groups as $material_group)
			        <tr>
			        	<td width='1%'><a href="{{ route('material_groups.edit', ['id'=>$material_group->id]) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
			        	<td width='24%'>{{ $material_group->mat_classe_cod }}</td>
			        	<td>{{ $material_group->mat_classe_desc }}</td>
			        	<td width='1%'><a href="{{ route('material_groups.destroy', ['id'=>$material_group->id]) }}"><i class="glyphicon glyphicon-trash danger"></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection