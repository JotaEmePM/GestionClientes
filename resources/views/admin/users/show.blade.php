@extends('main.template.main')
@section('title', 'Ver usuario: ' . $usuario->name)
@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('admin.users.index') }}" class="btn btn-warning btn-block"><i class="fa fa-arrow-left"></i> Volver</a>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Datos usuario</h5>
                </div>
                <div class="ibox-content profile-content">
                    <h4>
                        <i class="fa fa-user"></i>
                        {{ $usuario->name }}
                    </h4>
                    <p>
                        <i class="fa fa-lock"></i>
                        {{ $usuario->Perfil }}
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i>
                        {{ $usuario->email }}
                    </p>
                    <p>
                        @if($usuario->Estado == 'Habilitado')
                            <i class="fa fa-check"></i>
                            &nbsp;
                            Habilitado
                        @else
                            <i class="fa fa-ban"></i>
                            &nbsp;
                            Deshabilitado
                        @endif
                    </p>
                    <hr>
                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-pencil"></i> Editar usuario</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Bloquear usuario</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Actividad del usuario</h5>
                </div>
                <div class="ibox-content">
                    <!--Element-->
                    <div class="feed-element">
                        <a href="#" class="pull-left">
                            <img src="" alt="" class="img-circle">
                        </a>
                        <div class="media-body">
                            <small class="pull-right text-navy">
                                5% OT
                            </small>
                            <strong>TITULO_ACTIVIDAD</strong>
                            <br>
                            <small class="text-muted">
                                <i class="fa fa-calendar"></i>
                                10-02-2015 15:30 Hrs
                            </small>
                            <div class="well">
                                [Comentarios]
                            </div>
                        </div>
                    </div>
                    <!--Fin Element-->
                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i>&nbsp;Mostrar más...</button>
                </div>
            </div>
        </div>
    </div>
@endsection