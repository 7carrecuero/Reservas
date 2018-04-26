@extends('front.template.main')

@section('modulo', 'Mi Reserva')
@section('title', $reserva->funcion->nombre)

@section('header')

<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
							<h1 class="cursive-font">Felicidades, su reserva esta hecha!</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
@endsection

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
		
	<a href="{{ route('main.index') }}" class="btn btn-primary btn-block">Volver</a>
	</div>
	</div>
@endsection