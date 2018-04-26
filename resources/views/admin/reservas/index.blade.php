@extends('layouts.app')

@section('modulo', 'Reservas')
@section('title', 'Listado de Reservas')

@section('content')
<div class="dataTable_wrapper">

<hr>
	<table class="table table-hover">
 		<thead>
 			<th>ID</th>
 			<th class="text-center">Numero</th>
 			<th class="text-center">Fecha de la función</th>
 			<th class="text-right">Acción</th>
 		</thead>
 		<tbody>
 		@foreach($reservas as $reserva)
 			<tr>
 				<td>{{ $reserva->id }}</td>
	
 				<td class="text-center">{{ $reserva->numero}}</td>			
 				<td class="text-center">{{ $reserva->funcion->fecha }}</td>										
 				<td class="text-right">
 					<a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></a>
 					
 					
 				</td>
 			</tr>
 		@endforeach
 		</tbody>
	</table>
	<div class="text-center">
	{!! $reservas->render() !!}
	</div>
	</div>
@endsection