@extends('layouts.app')

@section('title','Modelo de paginación')

@section('content')
    <div class="mx-auto" style="width: 200px;">
        <h3>Lista</h3>
    </div>
	<model_pagination-component>
	</model_pagination-component>
@endsection

@section('view','model/pagination.blade.php')
