@extends('layouts.app')

@section('title','Prioridad de Docentes del curso '.$curso->wcurso)

@section('content')
	<Dcurso-Component></Dcurso-Component>
@endsection

@section('view','admin/dcurso/index.blade.php')