@extends('layouts.app')

@section('title','Crear Menu')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['route'=>'master.menu.store', 'method'=>'POST']) !!}
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><div class="form-group">
                                    {!! Field::text('Descripción: ',null, ['name'=>'name', 'class'=>'form-control', 'placeholder'=>'Nuevo Menú','required']) !!}
                                </div></td>
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    {!! Field::text('Ruta: ',null, ['name'=>'href', 'class'=>'form-control', 'placeholder'=>'/clase/accion']) !!}
                                </div></td>
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    {!! Field::number('sw_auth: ', null, ['placeholder'=>0, 'range'=>'[0-1]', 'required']) !!}
                                </div></td>
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    {!! Field::text('Help: ', null, ['name'=>'help', 'class'=>'form-control', 'placeholder'=>'Texto de Ayuda']) !!}
                                </div></td>
                            </tr>
                            <br>            
                        </tbody>
                    </table>
                    <div class="form-group">
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('view','create.blade.php')

