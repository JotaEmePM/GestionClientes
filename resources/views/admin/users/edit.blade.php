@extends('main.template.main')
@section('title', 'Editar usuario: ' . $user->name)
@section('content')
    {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $user->name,['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Correo electronico') !!}
        {!! Form::email('email', $user->email,['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@correo.com' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Perfil','Perfil') !!}
        {!! Form::select('Perfil',['' => 'Seleccione...', 'Basico' => 'Básico','Administrador' => 'Administrador' ], $user->Perfil, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Modificar', ['class' => 'btn btn-success' ]) !!}
        <a href="{{ route('admin.users.index') }}" class="btn btn-warning">Volver</a>
    </div>
    {!! Form::close() !!}
@endsection