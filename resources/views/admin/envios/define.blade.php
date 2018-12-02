@extends('layouts.app')

@section('content')
	<envio-component dusk="envio-component"
		:id='{{ $id }}'
		:facultad_id="{{ \Session::get('facultad_id') }}"
		:sede_id="{{ \Session::get('sede_id') }}"
		:type_id="{{ \Session::get('type_id') }}"
		></envio-component>
@endsection

@section('view','admin/envios/define.blade.php')	

