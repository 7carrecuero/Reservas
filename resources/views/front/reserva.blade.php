@extends('layouts.app')

@section('modulo', 'Funciones')
@section('title', 'Crear Función')

@section('content')
<div class="row">
     <div class="col-md-3">
          
     </div>
     <div class="col-md-6">

{!! Form::open(['route' => 'funciones.store', 'method' => 'POST', 'files' => true]) !!}
          
          <div class="form-group">
          {!! Form::label('nombre','Nombre'); !!}
               {!! Form::text('nombre', null,['class' => 'form-control','required']); !!}
          </div>

           
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}  

{!! Form::close() !!} 

     </div>
     <div class="col-md-3">
          
     </div>
</div>
<hr>

<div class="dataTable_wrapper">

  
  
  </div>
@endsection 