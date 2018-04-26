@extends('layouts.app')

@section('modulo', 'Asientos')
@section('title', 'Listado de Asientos')

@section('content')
<div class="dataTable_wrapper">
<a href="{{ route('asientos.create') }}" class="btn btn-success">Registrar Asiento</a>
<hr>
	<table class="table table-hover">
 		<thead>
 			<th>ID</th>
 			<th class="text-center">Asiento</th>
 			<th class="text-right">Acción</th>
 		</thead>
 		<tbody>
 		@foreach($asientos as $asiento)
 			<tr>
 				<td>{{ $asiento->id }}</td>
	
 				<td class="text-center">{{ $asiento->fila.'-'.$asiento->columna }}</td>										
 				<td class="text-right">
 					
 					<a href="{{ route('asientos.edit', $asiento->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
 					
 				</td>
 			</tr>
 		@endforeach
 		</tbody>
	</table>
	<div class="text-center">
	{!! $asientos->render() !!}
	</div>
	</div>
@endsection