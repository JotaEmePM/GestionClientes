@extends('main.template.main')
@section('title', 'Creacion de clientes')
@section('content')
    {!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre cliente') !!}
        {!! Form::text('Nombre', null,['class' => 'form-control', 'required', 'placeholder' => 'Ej: Cliente 1' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Nombre contacto') !!}
        {!! Form::text('NombreContacto', null,['class' => 'form-control', 'required', 'placeholder' => 'Ej: Eduardo Lopez' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Email') !!}
        {!! Form::text('Email', null,['class' => 'form-control', 'required', 'placeholder' => 'Ej: email@ejemplo.com' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Direccion') !!}
        {!! Form::text('Direccion', null,['class' => 'form-control', 'required', 'placeholder' => 'Ej: email@ejemplo.com' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-success' ]) !!}
        <a href="{{ route('admin.clientes.index') }}" class="btn btn-warning">Volver</a>
    </div>
    {!! Form::close() !!}
@endsection