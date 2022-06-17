<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dimension</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>

                </ul>


                <!-- SEARCH FORM -->


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <div class="user-panel d-flex">
                        <div class="image">

                            <img src="{{ asset('imagenes/' . Auth::user()->imagen) }}" class="img-circle">

                        </div>

                    </div>

                    <div class="info">
                        <a href="{{ url('profile') }}" class="d-block">
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            @else
                                {{ Auth::user()->name }}

                            @endguest

                        </a>
                    </div>
                    <div class="row">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary">
                <!-- Brand Logo -->
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>


                            @can('administrador')
                                <li class="nav-item">
                                    <a href="{{ url('usuarios') }}"
                                        class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Usuarios
                                        </p>
                                    </a>
                                </li>
                            @endcan

                            @can('administrador')
                                <li class="nav-item">
                                    <a href="{{ url('roles') }}"
                                        class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Roles

                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('administrador')
                                <li class="nav-item">
                                    <a href="{{ url('forms') }}"
                                        class="{{ Request::path() === 'forms' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="fa-solid fa-file-circle-check"></i>
                                        <p>
                                            Seguimiento
                                        </p>
                                    </a>
                                </li>
                            @endcan

                            <li class="nav-item">
                                <a href="{{ url('vistausuarios') }}"
                                    class="{{ Request::path() === 'vistausuarios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Perfiles

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('files') }}"
                                    class="{{ Request::path() === 'files' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="fa-solid fa-image"></i>
                                    <p>
                                        Imagenes

                                    </p>
                                </a>
                            </li>





                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <@yield('js')
</body>

</html>
