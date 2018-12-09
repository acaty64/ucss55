@extends('layouts.app')
@section('title','Requerimiento de disponibilidad horaria')
@section('content')
	<h3 style="text-align: center">Requerimiento de Disponibilidad horaria</h3>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
				<Rhora_edit-component  
					:facultad_id="{{ $facultad_id }}" 
					:sede_id="{{ $sede_id }}" 
					:data="{{ $data }}" 
					:data_pages="{{ $pagination }}" 
					></Rhora_edit-component>
			</div>
		</div>
</div>
@endsection

@section('view','rhoras.index.blade.php')
