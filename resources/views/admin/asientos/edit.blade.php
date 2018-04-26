@extends('layouts.app')

@section('modulo', 'Asientos')
@section('title', 'Editar Asiento')


@section('content')

  
{!! Form::open(['route' => ['asientos.update', $asiento], 'method' => 'PUT', 'files' => true]) !!}
          

           <div class="form-group">
          {!! Form::label('fila','Fila'); !!}
               {!! Form::text('fila', $asiento->fila,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('columna','Columna'); !!}
               {!! Form::text('columna', $asiento->columna,['class' => 'form-control','required']); !!}
          </div>          
 
          
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}  
          
{!! Form::close() !!}

@endsection
