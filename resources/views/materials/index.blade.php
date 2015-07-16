@extends('app')

@section('content')
	<div class="container"> 
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais</h3>
		       	<div class="pull-right">
		    		{!! Form::open(['route' => 'materials', 'method' => 'GET', 'class' => 'form-inline pull-right', 'role' => 'search']) !!}
			  			<div class="form-group">
			    			{!! Form::text('search_cod_desc', null, ['class' => 'form-control', 'placeholder' => 'Código ou Descrição']) !!}
			  			</div>
				  		<button type="submit" class="btn btn-primary">Buscar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<table class="table table-bordered table-striped"> 
			<thead>
				<tr>
					<th><a href="{!! route('materials.create') !!}"><i class="fa fa-file-o"></i></a></th>
					<th class="text-right">Código</th>
					<th>Descrição</th>
					<th>Unid</th>
					<th>Tipo</th>
					<th>Grupo</th>
					<th>Situação</th>
					<th class="text-right">R$ Unit</th>
					<th>Estoque</th>
					<th width="1%">#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($materials as $material)
			        <tr>
			        	<td width="1%"><a href="{{ route('materials.edit', ['id' => $material->id]) }}"><i class='fa fa-edit'></i></a></td>
			        	<td class="text-right" width='7%'><a href="{{ route('materials.show', ['id' => $material->id]) }}">{{ $material->mat_cod }}</a></td>
			        	<td>{{ $material->mat_desc }}</td>
			        	<td width="1%">{{ $material->material_unit->mat_unid }}</td>
			        	<td width="1%">{{ $material->material_type->mat_tipo }}</td>
			        	<td width="1%">{{ $material->material_group->mat_classe_cod }}</td>
			        	<td width="1%">{{ $material->material_status->mat_sit }}</td>
			        	<td width="1%" class="text-right">{{ number_format($material->mat_vlr_ult_aquis, '2',',','.') }}</td>
			        	<td width="1%"></td>
			        	<td width='1%'><a href="{{ route('materials.destroy', ['id'=>$material->id]) }}" onclick="return confirm('Tem certeza que deseja excluir ?')"><i class='fa fa-trash-o'></i></a></td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection