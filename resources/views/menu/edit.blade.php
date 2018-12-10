@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edición de Menú</div>
        <div class="panel-body">
          {!! Form::model($items, array('route' => ['master.menu.update'], 'method' => 'POST')) !!}
            {!! Form::hidden('id',$items->id) !!}
            <div class="form-group">
              {!! Form::label('name','name: Opción visible en la barra de menú.') !!}
              {!! Form::text('name', $items->name, ['class'=>'form-control', 'required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('href','href: Ruta de destino.') !!}
              {!! Form::text('href', $items->href, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('sw_auth','sw_auth (0/1): Verifica el usuario logueado.') !!}
              {!! Form::text('sw_auth', $items->sw_auth, ['class'=>'form-control', 'required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('parameter','parameter: Parámetro de la ruta.') !!}
              {!! Form::text('parameter', $items->parameter, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('help','help: Texto visible en la vista Help.') !!}
              {!! Form::text('help', $items->help, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Grabar modificaciones', ['class'=>'btn btn-primary']) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('view','view/menu/edit.blade.php')
