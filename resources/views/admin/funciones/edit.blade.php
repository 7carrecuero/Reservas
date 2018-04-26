@extends('layouts.app')

@section('modulo', 'Funcion')
@section('title', 'Editar Funcion')


@section('content')

  
{!! Form::open(['route' => ['funciones.update', $funcion], 'method' => 'PUT', 'files' => true]) !!}
          

           <div class="form-group">
          {!! Form::label('nombre','Nombre'); !!}
               {!! Form::text('nombre', $funcion->nombre,['class' => 'form-control', 'required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('fecha','Fecha'); !!}
               {!! Form::date('fecha', $funcion->fecha,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('resumen','Resumen'); !!}
               {!! Form::textarea('resumen', $funcion->resumen,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('descripcion','Descripción'); !!}
               {!! Form::textarea('descripcion', $funcion->descripcion,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('precio','Precio'); !!}
               {!! Form::number('precio', $funcion->precio,['class' => 'form-control','required']); !!}
          </div>

          <div class="form-group">
          {!! Form::label('foto','Foto'); !!} <br>
<img src="{{ asset('images/funciones/'.$funcion->foto) }}" alt="" width="70" height="65"> 
<br>
        {{ $funcion->foto }}
          <h4>Actualizar Imagen</h4>
          {!! Form::file('foto', null); !!}
          </div> 

          
 
          
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']); !!}  
          
{!! Form::close() !!}

@endsection
