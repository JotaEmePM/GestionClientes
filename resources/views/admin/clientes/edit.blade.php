@extends('main.template.main')
@section('title', 'Editar cliente: ' . $cliente->Nombre)
@section('content')
    {!! Form::open(['route' => ['admin.clientes.update', $cliente], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre cliente') !!}
        {!! Form::text('Nombre', $cliente->Nombre,['class' => 'form-control', 'required', 'placeholder' => 'Ej: Cliente 1' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Nombre contacto') !!}
        {!! Form::text('NombreContacto', $cliente->NombreContacto,['class' => 'form-control', 'required', 'placeholder' => 'Ej: Eduardo Lopez' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Email') !!}
        {!! Form::text('Email', $cliente->Email,['class' => 'form-control', 'required', 'placeholder' => 'Ej: email@ejemplo.com' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Direccion') !!}
        {!! Form::text('Direccion', $cliente->Direccion,['class' => 'form-control', 'required', 'placeholder' => 'Ej: Calle 3 #345, Santiago' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-success' ]) !!}
        <a href="{{ route('admin.clientes.index') }}" class="btn btn-warning">Volver</a>
    </div>
    {!! Form::close() !!}
@endsection