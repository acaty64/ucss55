@extends('layouts.app')

@section('title','Lista de Usuarios')

@section('content')
		<userindex-component 
			:facultad_id="{{ \Cache::get('facultad_id') }}"
			:sede_id="{{ \Cache::get('sede_id') }}"
			ctype="{{ \Cache::get('ctype') }}">
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