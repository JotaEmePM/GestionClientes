<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acceso de usuarios</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">GC</h1>

        </div>
        <h3>Gestión clientes</h3>

        <p>Por favor ingresa tus datos.</p>
        {!! Form::open(['route' => 'auth.login', 'method' => 'POST'], ['class' => 'm-t']) !!}
            <div class="form-group">
                {!! Form::email('email', null,['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@correo.com' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '************' ]) !!}
            </div>
            {!! Form::submit('Acceder', ['class' => 'btn btn-primary block full-width m-b']) !!}
        {!! Form::close() !!}
        <form class="m-t" role="form" action="index.html">


            <a href="#"><small>Olvidé mi password</small></a>

        </form>
        <!--<p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>-->
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
