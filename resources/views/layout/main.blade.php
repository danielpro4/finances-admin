<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <title>Finances Admin</title>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('css-plugins')

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/target-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('css-custom')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-cogs"></i>
            </button>

            <a class="navbar-brand navbar-brand-image" href="./index.html">
                <img src="{{ asset('img/logo.png') }}" alt="Site Logo">
            </a>

        </div>
        <!-- /.navbar-header -->

        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown navbar-profile">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <img src="./img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
                        <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu" role="menu">

                        <li>
                            <a href="./page-settings.html">
                                <i class="fa fa-cogs"></i> &nbsp;&nbsp;Settings
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="./account-login.html">
                                <i class="fa fa-sign-out"></i> &nbsp;&nbsp;Logout
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

        </div>
        <!--/.navbar-collapse -->

    </div>
    <!-- /.container -->

</div>
<!-- /.navbar -->

<div class="mainbar">

    <div class="container">

        <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
            <i class="fa fa-bars"></i>
        </button>

        <div class="mainbar-collapse collapse">

            <ul class="nav navbar-nav mainbar-nav">

                <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                    <a href="{{route('dashboard.index')}}">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                </li>

                <li class="{{ Request::segment(1) === 'spents' ? 'active' : null }}">
                    <a href="{{route('spent.index')}}">
                        <i class="fa fa-money"></i> Gastos
                    </a>
                </li>

                <li>
                    <a href="./index.html">
                        <i class="fa fa-lock"></i> Senhas
                    </a>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->

</div>
<!-- /.mainbar -->


<div class="container">

    <div class="content">

        <div class="content-container">

            <div class="row">

                @yield('content')

            </div>
            <!-- /.row -->

        </div>
        <!-- /.content-container -->

    </div>
    <!-- /.content -->

</div>
<!-- /.container -->


<footer class="footer">

    <div class="container">

        <div class="row">

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</footer>

@yield('custom')

<script src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/howl.js') }}"></script>
@yield('js-plugins')
<!-- App JS -->
<script src="{{ asset('js/target-admin.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@yield('js-custom')

@include('layout.return-request')

</body>

</html>
