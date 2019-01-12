@extends('layouts.app')

{{-- @section('title','Grupo de Cursos: '.$grupo->wgrupo ) --}}

@section('content')
	<Cursogrupo_edit-component
		grupo_id="{{ $grupo_id }}"
		facultad_id="{{ \Session::get('facultad_id') }}" 
		sede_id="{{ \Session::get('sede_id') }}" >
	</Cursogrupo_edit-component>
@endsection

@section('view','admin/cursogrupo/edit.blade.php')	
