@extends('layouts.app')
@section('title','Solicitud de Requerimiento')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
					Solicite agregue el requerimiento de disponibilidad para su acceso al Coordinador de: <br>
					Facultad: {{ \Session::get('wfacultad') }} <br>
					Filial: {{ \Session::get('wsede') }} <br>
					al correo electrónico: 
					<a href="">ucss.{{ strtolower(\Session::get('cfacultad')) }}.{{ strtolower(\Session::get('csede')) }}.gmail.com</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('view','request.blade.php')
