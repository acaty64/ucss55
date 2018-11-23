@extends('layouts.app')
@section('title','Descripción de Opciones')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            	<div class="panel-heading">Descripción de Opciones</div>
                <div class="panel panel-default">
					<Help-Component :type_id="{{ \Session::get('type_id') }}"></Help-Component>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('view','help.blade.php')
