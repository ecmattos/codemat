@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: tipos</h3>
		<a href="{{ route('material_types.create') }}" class="btn btn-default"><i class="glyphicon glyphicon-file"></i></a>
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
				@foreach($material_types as $material_type)
			        <tr>
			        	<td width='1%'><a href="{{ route('material_types.edit', ['id'=>$material_type->id]) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
			        	<td width='24%'>{{ $material_type->mat_tipo }}</td>
			        	<td>{{ $material_type->mat_tipo_desc }}</td>
			        	<td width='1%'><a href="{{ route('material_types.destroy', ['id'=>$material_type->id]) }}"><i class="glyphicon glyphicon-trash danger"></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection