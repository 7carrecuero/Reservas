@extends('front.template.main')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{ asset('images/img_bg_1.jpg') }}" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					
{!! Form::open(['route' => 'main.index', 'method' => 'GET']) !!}
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
							<h1 class="cursive-font">The best theater performances!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Busqueda de Funciónes</h3>
											<form action="#">
												<div class="row form-group">
													<!-- <div class="col-md-12">
														<label for="activities">Persons</label>
														<select name="#" id="activities" class="form-control">
															<option value="">Persons</option>
															<option value="">1</option>
															<option value="">2</option>
															<option value="">3</option>
															<option value="">4</option>
															<option value="">5+</option>
														</select>
													</div> -->
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Fecha</label>
														{!! Form::text('fecha', null,['class' => 'form-control','placeholder' => 'Buscar','id' => 'date']); !!}
													</div>
												</div>
												<!-- <div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Time</label>
														<input type="text" id="time" class="form-control">
													</div>
												</div> -->

												<div class="row form-group">
													<div class="col-md-12">
														
														{!! Form::submit('Buscar', ['class' => 'btn btn-primary btn-block']); !!}  
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
						{!! Form::close() !!}	
					
				</div>
			</div>
		</div>
	</header>


@endsection

@section('modulo', 'Funciones')
@section('title', 'Estas son todas las funciones disponibles.')

@section('content')

 		@foreach($funciones as $funcion)

			<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-card-item">
					<a href="{{ asset('images/funciones/'.$funcion->foto) }}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{ asset('images/funciones/'.$funcion->foto) }}" alt="Image" class="img-responsive">
						</figure>
					</a>
						
						<div class="fh5co-text">
							<h2>{{$funcion->nombre}}</h2>
							<p>{{$funcion->resumen}}</p>
							<h3>{{date("d-m-Y", strtotime($funcion->fecha))}}</h3>
							<p><span class="price cursive-font">E {{$funcion->precio}}</span></p>
							<a href="{{ route('asientos',$funcion->id) }}" class="btn btn-primary btn-block" >Reservar</a>
						</div>
						</div>

				</div>
				
 		@endforeach

@endsection
