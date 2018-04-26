@extends('front.template.main')

@section('modulo', 'Asientos')
@section('title', 'Escoja los asientos a reservar para: ')
@section('funcion', $funcion->nombre)

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
							<h1 class="cursive-font">Escoge tus asientos!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
@endsection

@section('content')
{!! Form::open(['route' => 'main.store', 'method' => 'POST']) !!}
    {!! Form::hidden('funcion', $funcion->id,['class' => 'form-control','required']); !!}

		<h4 style="color: gray;">Asientos Disponibles: <span class="price cursive-font">{{count($asientos) - count($reservaAsiento)}}</span></h4>
					

			<div class="col-lg-9 col-md-9 col-sm-9">
			
				
 		@foreach($asientos as $asiento)
			@php($disp = 0)
 		@if(in_array($asiento->id,$reservaAsiento))
			@php($disp = 1)
 		@endif
 			

			@if($asiento->columna == 1)
			<div class="row">

			@endif
				<div class="col-lg-1 col-md-1 col-sm-1">
					<label class="fh5co-card-item butacas asiento-{{$asiento->id}}" style="height: 115px; cursor:pointer;" for="asiento-{{$asiento->id}}">
						@if($disp == 0)
						{!! Form::checkbox('asientos[]', $asiento->id,false,['class' => 'form-control chk-chair hidden','id' => 'asiento-'.$asiento->id, 'check' => $asiento->id]); !!}
						@endif
						<figure>
							@if($disp == 0)

							<img src="{{ asset('images/asiento-disp.jpg') }}" alt="Image" class="img-responsive" id="imgAsientoDisp">
							<img src="{{ asset('images/asiento.jpg') }}" alt="Image" class="img-responsive" id="imgAsientoOcup" style="display:none;">
							@else

							<img src="{{ asset('images/asiento-x.jpg') }}" alt="Image" class="img-responsive" id="imgAsientoX">
							@endif
							<span class="price cursive-font" style="font-size:15px; padding-left: 5px; color:#FBB448;">{{$asiento->fila.'-'.$asiento->columna}}</span>
						</figure>
					</label>
				</div>

			@if($asiento->columna == 10)
		</div>
			@endif

		@endforeach

			</div>
		<div class="col-lg-3 col-md-3 col-sm-3 animate-box fadeInUp animated-fast" data-animate-effect="fadeInRight">
			<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Reservación</h3>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Fecha</label><br>
														{{date("d-m-Y", strtotime($funcion->fecha))}}
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Butacas</label>
    Cantidad: {!! Form::text('butacas', 0,['class' => 'form-control','id' => 'butacas', 'required','readonly']); !!}
														
													</div>
												</div>
												<hr>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Precio Por Butaca</label><br>
														{!! Form::text('precio', $funcion->precio,['class' => 'form-control','id' => 'precio', 'required','readonly']); !!} Euros
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Precio Total</label>
														{!! Form::text('total', 0,['class' => 'form-control','id' => 'total', 'required','readonly']); !!} Euros
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
          {!! Form::submit('Confirmar', ['class' => 'btn btn-primary btn-block']); !!}  
														
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
		</div>
		

{!! Form::close() !!} 
@endsection

@section('js')

<script>

	$(document).ready(function(){
		$('.chk-chair').prop('checked',false);
		$('#butacas').val(0);
		$('#total').val(0);

		$( ".chk-chair" ).click(function() {
			var chk = $(this).attr('id');
			var imgOcup = $('.'+chk).find('#imgAsientoOcup');
			var imgDisp = $('.'+chk).find('#imgAsientoDisp');
			var butacas = Number($('#butacas').val());
			document.querySelector('#'+chk).addEventListener('change',function(){
				if(this.checked){
					butacas++;
					$(imgOcup).show();
					$(imgDisp).hide();
				}else{
					butacas--;
					$(imgDisp).show();
					$(imgOcup).hide();
				}
				$('#butacas').val(butacas);
				var precio = Number($('#precio').val());
				$('#total').val(butacas*precio);
			});
		});

	});

</script>

@endsection