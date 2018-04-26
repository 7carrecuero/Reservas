@extends('layouts.app')

@section('modulo', 'Funcion')
@section('title', 'Editar Funcion')


@section('content')

  
{!! Form::open(['route' => ['funciones.update', $funcion], 'method' => 'PUT', 'files' => true]) !!}
          

           <div class="form-group">
          {!! Form::label('nombre','Nombre'); !!}
               {!! Form::text('nombre', $funcion->nombre,['class' => 'form-control', 'required']); !!}
          </div>

          
 
          
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}  
          
{!! Form::close() !!}

@endsection
