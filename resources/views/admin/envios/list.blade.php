@extends('layouts.app')

@section('title','Lista de Docentes Comunicados. / Tipo: '
		. $Denvios[0]->menvio->tipo
		. ' / Fecha de Envío: ' . $Denvios[0]->menvio->fenvio
		. ' / Fecha Límite: ' . $Denvios[0]->menvio->flimite )

@section('content')

	<table class="table table-striped">
 		<thead>
 			<th>User Id</th>
 			<th>Codigo</th>
 			<th>Docente Comunicado</th>
 			<th>Email enviado</th>
 			<th>Email con copia</th>
 			<th>Enviado</th>
 			<th>Respuesta</th>
 		</thead>
 		<tbody>
 			@foreach($Denvios as $envio )
 				<tr>
 					<td>{{ $envio->user->id }}</td>
 					<td>{{ $envio->user->datauser->cdocente }}</td>
 					<td>{{ $envio->user->name }}</td>
 					{{-- <td>{{ substr($envio->wdocente,0,50) }}</td> --}}
 					<td>{{ $envio->user->datauser->email1 }}</td>
 					<td>{{ $envio->user->datauser->email2 }}</td>
 					<td>
 						@if($envio->sw_envio == 1)
 							<a href="#" class="btn btn-success" data-toggle="tooltip" title="Se envió"><span class="glyphicon glyphicon-ok" aria-hidden='true'></span></a>
 						@else
 							<a href="#" class="btn btn-danger" data-toggle="tooltip" title="Está pendiente de envío"><span class="glyphicon glyphicon-remove" aria-hidden='true'></span></a>
 						@endif

 					</td>
 					<td>
 						@if($envio->sw_rpta1 == 1 && $envio->sw_rpta2 == 1)
 							<a href="#" class="btn btn-success" data-toggle="tooltip" title="El docente respondió"><span class="glyphicon glyphicon-ok" aria-hidden='true'></span></a>
 						@else
 							<a href="#" class="btn btn-danger" data-toggle="tooltip" title="El docente no ha respondido"><span class="glyphicon glyphicon-remove" aria-hidden='true'></span></a>
 						@endif

 					</td>
	 			</tr>
 			@endforeach 			
 		</tbody>
	</table>
	{!! $Denvios->render() !!}
@endsection

@section('view','admin/envios/list.blade.php')	
