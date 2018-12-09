@extends('layouts.app')

@section('title','Disponibilidad Horaria del Docente: ' . $wdocente )

@section('content')
	<h2>Disponibilidad de Horarios</h2>
	<h2>Docente: {{ $wdocente }}</h2>

	<Dhora_edit-component  
		:facultad_id="{{ $facultad_id }}" 
		:sede_id="{{ $sede_id }}" 
		:docente_id="{{ $docente_id }}" 
		:sw_cambio="{{ $sw_cambio }}" 
		:dhoras="{{ $dhoras }}" 
		:rhoras="{{ $rhoras }}" 
		{{-- :wfranjas="{{ $wfranjas }}"  --}}
		:cfranjas="{{ $cfranjas }}" 
		:gfranjas="{{ $gfranjas }}" 
		></Dhora_edit-component>
@endsection

@section('view','admin/dhora/vue_edit.blade.php')