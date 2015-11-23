<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Inicio') | Gestión Clientes</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body class="">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        @include('main.template.partials.auth')
                    </div>
                    <div class="logo-element">
                        GC
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fa fa-users"></i> 
                        <span class="nav-label">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clientes.index') }}"><i class="fa fa-briefcase"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.proyectos.index') }}"><i class="fa fa-file-o"></i> <span class="nav-label">Proyectos</span></a>
                </li>
                <!--<li>
                    <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>                        
                    </ul>
                </li>-->                
                
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>            
            </div>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>@yield('title', 'Inicio')</h2>                    
                </div>
                <div class="col-sm-8">&nbsp;</div>
            </div>

            <div class="wrapper wrapper-content">
                @include('flash::message')
                @yield('content')
            </div>
            <div class="footer">
                <div class="pull-right">
                    Gestión clientes
                </div>                
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

    @yield('scripts')
</body>
</html>