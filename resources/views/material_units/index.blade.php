@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais: unidades</h3>
		<a href="{{ route('material_units.create') }}" class="btn btn-default"><i class="glyphicon glyphicon-file"></i></a>
		<table class="table"> 
			<thead>
				<tr>
					<th>#</th>
					<th>Unidade</th>
					<th>Descrição</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($material_units as $material_unit)
			        <tr>
			        	<td width='1%'><a href="{{ route('material_units.edit', ['id'=>$material_unit->id]) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
			        	<td width='24%'>{{ $material_unit->mat_unid }}</td>
			        	<td>{{ $material_unit->mat_unid_desc }}</td>
			        	<td width='1%'><a href="{{ route('material_units.destroy', ['id'=>$material_unit->id]) }}"><i class="glyphicon glyphicon-trash danger"></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection