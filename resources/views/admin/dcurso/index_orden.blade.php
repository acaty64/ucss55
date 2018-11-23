@extends('layouts.app')

@section('title','Prioridad de Docentes del curso '.$curso->wcurso)

@section('content')
	<h2>Prioridad de Docentes del curso: {{ $curso->wcurso }}</h2>
	<Dcurso_orden-Component></Dcurso_orden-Component>
@endsection

@section('view','admin/dcurso/index_orden.blade.php')