@extends('app')

@section('content')
	<div class="container"> 
		<div class="page-header">
			<div class="row">
		        <h3 class="pull-left">Materiais - Unidades</h3>		    
		    	<div class="pull-right">
		    		{!! Form::open(['route' => 'material_units', 'method' => 'GET', 'class' => 'form-inline pull-right', 'role' => 'search']) !!}
			  			<div class="form-group">
			    			{!! Form::text('search_unit_desc', null, ['class' => 'form-control input-default', 'placeholder' => 'Unidade e/ou Descrição']) !!}
			  			</div>
				  		<button type="submit" class="btn btn-primary">Buscar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
				
		<table class="table table-bordered table-striped">
		    <thead>
		        <th width="1%"><a href="{!! route('material_units.create') !!}"><i class="fa fa-file-o"></i></a></th>
		        <th width="10%">Unidade</th>
		        <th>Descrição</th>
		        <th width="1%">#</th>
		    </thead>
		    <tbody>
		    @foreach($material_units as $material_unit)
		        <tr>
		            <td>
		                <a href="{!! route('material_units.edit', [$material_unit->id]) !!}"><i class="fa fa-edit"></i></a>
		            </td>
		            <td>{!! $material_unit->mat_unid !!}</td>
		            <td>{!! $material_unit->mat_unid_desc !!}</td>
		            <td>
		                <a href="{!! route('material_units.destroy', [$material_unit->id]) !!}" onclick="return confirm('Tem certeza que deseja excluir ?')"><i class="fa fa-trash-o"></i></a>
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
	</div>
@endsection