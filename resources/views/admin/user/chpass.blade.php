@extends('layouts.app')

@section('title','Modificar Password '.$user->wdoc1." : Código ".$user->datauser->cod_doc)

@section('content')

	{!! Form::model($user, array('route' => array('admin.users.savepass', $user->id), 'method' => 'PUT')) !!}

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'**********','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('checkpassword','Confirme su Contraseña') !!}
			{!! Form::password('checkpassword', ['class'=>'form-control', 'placeholder'=>'**********','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Grabar nuevo password', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection

@section('view','admin/user/chpass.blade.php')