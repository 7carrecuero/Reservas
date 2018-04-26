@extends('layouts.app')

@section('modulo', 'Funciones')
@section('title', 'Listado de Funciones')

@section('content')
<div class="dataTable_wrapper">
<a href="{{ route('funciones.create') }}" class="btn btn-success">Registrar Funcion</a>
<hr>
	<table class="table table-hover">
 		<thead>
 			<th>ID</th>
 			<th class="text-center">Nombre</th>
 			<th class="text-right">Acción</th>
 		</thead>
 		<tbody>
 		@foreach($funciones as $funcion)
 			<tr>
 				<td>{{ $funcion->id }}</td>
	
 				<td class="text-center">{{ $funcion->nombre}}</td>			
 				<td class="text-right">
 					<a href="{{ route('funciones.show', $funcion->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></a>
 					<a href="{{ route('funciones.edit', $funcion->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
 					<a href="{{ route('funciones.destroy', $funcion->id) }}" onclick="return confirm('Esta seguro que desea eliminar el item?')" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
 				</td>
 			</tr>
 		@endforeach
 		</tbody>
	</table>
	<div class="text-center">
	{!! $funciones->render() !!}
	</div>
	</div>
@endsection