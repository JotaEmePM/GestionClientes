@extends('main.template.main')
@section('title', 'Creacion de usuarios')
@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null,['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email', null,['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@correo.com' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '************' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Perfil','Perfil') !!}
			{!! Form::select('Perfil',['' => 'Seleccione...', 'Basico' => 'Básico','Administrador' => 'Administrador' ], null, ['class' => 'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-success' ]) !!}
			<a href="{{ route('admin.users.index') }}" class="btn btn-warning">Volver</a>
		</div>		
	{!! Form::close() !!}
@endsection