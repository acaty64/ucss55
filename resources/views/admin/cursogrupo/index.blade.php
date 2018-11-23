@extends('layouts.app')

@section('title','Cursos del grupo '.$grupo->wgrupo)

@section('content')

	@can('is_admin', $acceso_auth)
		<a href="{{ route('admin.cursogrupo.edit', $grupo->id) }}" class="btn btn-info" id='NuevoCurso' name='NuevoCurso'>Agregar o Eliminar Cursos</a>
	@endcan
	<table class="table table-striped">
 		<thead>
 			<th>id</th>
 			<th>Código</th>
 			<th>Curso</th>
 			<th>Acción</th>
 			<th>Status</th>
 		</thead>
 		<tbody>
 			@foreach($cursos as $curso)
 				<tr>
	 				<td>{{ $curso->curso->id }}</td>
	 				<td>{{ $curso->curso->cod_curso }}</td>
	 				<td>{{ $curso->curso->wcurso }}</td>
	 				<td>
	 					<a href="{{ route('admin.dcurso.orden', [$curso->id]) }}" class="btn btn-success" data-toggle="tooltip" title="Prioridad docentes" name = "{{'Index'.$grupo->id}}"><span class="glyphicon glyphicon-sort" aria-hidden='true'></span></a>
	 				</td>
	 				<td>	 					
						<div style="align-self: center">
		 					@if($curso->sw_cambio == '0')
		 						<span style="color:red">PENDIENTE</span>
		 					@else 
		 						<span style="color:green">Actualizado</span>
		 					@endif
						</div>
	 				</td>
	 			</tr>
 			@endforeach 			
 		</tbody>
	</table>
@endsection

@section('view','admin/cursogrupo/index.blade.php')