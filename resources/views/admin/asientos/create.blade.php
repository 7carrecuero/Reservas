@extends('layouts.app')

@section('modulo', 'Asientos')
@section('title', 'Crear Asiento')

@section('content')
<div class="row">
     <div class="col-md-3">
          
     </div>
     <div class="col-md-6">

{!! Form::open(['route' => 'asientos.store', 'method' => 'POST', 'files' => true]) !!}
          
          <div class="form-group">
          {!! Form::label('fila','Fila'); !!}
               {!! Form::text('fila', null,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('columna','Columna'); !!}
               {!! Form::text('columna', null,['class' => 'form-control','required']); !!}
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