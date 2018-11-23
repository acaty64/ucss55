@extends('layouts.app')

@section('title','Lista de Usuarios')

@section('content')
    <div class="mx-auto" style="width: 200px;">
        <h3>Lista de Usuarios</h3>
    </div>
	<userindex-component 
		:facultad_id="{{ \Session::get('facultad_id') }}"
		:sede_id="{{ \Session::get('sede_id') }}"
		ctype="{{ \Session::get('ctype') }}">
	</userindex-component>
@endsection

@section('js')

@endsection

@section('view','admin/user/index.blade.php')

<script>
	/*
https://www.uno-de-piera.com/componentes-dinamicos-vue-js-2/
	*/
</script>