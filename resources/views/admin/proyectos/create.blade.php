@extends('main.template.main')
@section('title', 'Creacion de proyectos')
@section('content')
    {!! Form::open(['route' => 'admin.proyectos.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('email','Código') !!}
        {!! Form::email('email', null,['class' => 'form-control', 'required', 'placeholder' => 'P001-E1' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Nombre del proyecto') !!}
        {!! Form::text('name', null,['class' => 'form-control', 'required', 'placeholder' => 'Nombre' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','Nombre del proyecto') !!}
        {!! Form::text('name', null,['class' => 'form-control', 'required', 'placeholder' => 'Nombre' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Siguiente', ['class' => 'btn btn-success' ]) !!}
        <a href="{{ route('admin.users.index') }}" class="btn btn-warning">Volver</a>
    </div>
    {!! Form::close() !!}
@endsection