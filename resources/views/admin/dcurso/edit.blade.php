@extends('layouts.app')

{{-- @section('title','Disponibilidad de Cursos: ' .  $docente->datauser->wdocente() ) --}}

@section('content')
{{-- 	<h2>Disponibilidad de Cursos</h2>
	<h2>Docente: {{ $docente->datauser->wdocente() }}</h2> --}}
	<Dcurso_edit-component  
		facultad_id="{{ $facultad_id }}" 
		sede_id="{{ $sede_id }}" 
		docente_id="{{ $docente_id }}" 
		wdocente="{{ $wdocente }}" 
		sw_cambio = "{{ $sw_cambio }}"
		>
	</Dcurso_edit-component>
@endsection

@section('view','admin/dcurso/edit.blade.php')	
