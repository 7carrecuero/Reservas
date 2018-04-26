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

          <div class="form-group">
          {!! Form::label('fecha','Fecha'); !!}
               {!! Form::date('fecha', \Carbon\Carbon::now(),['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('resumen','Resumen'); !!}
               {!! Form::textarea('resumen', null,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('descripcion','Descripción'); !!}
               {!! Form::textarea('descripcion', null,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('precio','Precio'); !!}
               {!! Form::number('precio', null,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('foto','Foto'); !!}
               {!! Form::file('foto', null,['class' => 'form-control']); !!}
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