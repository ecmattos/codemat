@extends('app')

@section('content')
	<div class="container"> 
		<h3>Materiais</h3>
		<a href="{{ route('materials.create') }}" class="btn btn-default"><i class='glyphicon glyphicon-file'></i></a>
		
		{!! Form::open(['route' => 'materials', 'method' => 'GET', 'class' => 'form-inline pull-right', 'role' => 'search']) !!}
  			<div class="form-group">
    			{!! Form::text('search_cod_desc', null, ['class' => 'form-control', 'placeholder' => 'Código ou Descrição']) !!}
  			</div>
	  		<button type="submit" class="btn btn-primary">Buscar</button>
		{!! Form::close() !!}

		<table class="table"> 
			<thead>
				<tr>
					<th>#</th>
					<th>Código</th>
					<th>Descrição</th>
					<th>Unid</th>
					<th class="text-right">R$ Unit</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($materials as $material)
			        <tr>
			        	<td width='1%'><a href="{{ route('materials.edit', ['id'=>$material->id]) }}"><i class='glyphicon glyphicon-edit'></i></a></td>
			        	<td width='24%'>{{ $material->mat_cod }}</td>
			        	<td>{{ $material->mat_desc }}</td>
			        	<td>{{ $material->material_unit->mat_unid }}</td>
			        	<td class="text-right">{{ number_format($material->mat_vlr_ult_aquis, '2',',','.') }}</td>
			        	<td width='1%'><a href="{{ route('materials.destroy', ['id'=>$material->id]) }}"><i class='glyphicon glyphicon-trash'></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection