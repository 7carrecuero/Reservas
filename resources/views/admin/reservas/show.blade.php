@extends('layouts.app')

@section('modulo', 'Reserva')
@section('title', $reserva->funcion->nombre)


@section('content')
	<div class="fh5co-text" >
		<h2 style="color: gray;">Nro. Reserva <span class="price cursive-font">{{$reserva->numero}}</span></h2>
		<h2 style="color: gray;">Cantidad de Butacas <span class="price cursive-font">{{$reserva->cantidad}}</span></h2>
		<h2 style="color: gray;">
			@foreach($reservaAsiento as $asiento)
			Butaca<span class="price cursive-font">{{$asiento->asiento->fila.'-'.$asiento->asiento->columna}}</span>
			@endforeach
		</h2>
		<h2 style="color: gray;">Valor Unitario x Butaca<span class="price cursive-font">E {{$reserva->valorUnitario}}</span></h2>
		<h2 style="color: gray;">Valor Total<span class="price cursive-font">E {{$reserva->valorTotal}}</span></h2>
	</div>
	
	<div class="row form-group">
													<div class="col-md-12">
		
	<a href="{{ route('reservas.index') }}" class="btn btn-primary btn-block">Volver</a>
	</div>
	</div>
@endsection