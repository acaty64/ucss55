@extends('layouts.app')

@section('title','Disponibilidad de Cursos: ' )

@section('content')
	<h2>Disponibilidad de Cursos</h2>
	<h2>Docente: {{ $docente->datauser->wdocente() }}</h2>
	<Dcurso_edit-component  
		:facultad_id="{{ $facultad_id }}"
		:sede_id="{{ $sede_id }}"
		:docente_id="{{ $docente_id }}"></Dcurso_edit-component>
@endsection

@section('view','admin/dcursos/edit.blade.php')	
