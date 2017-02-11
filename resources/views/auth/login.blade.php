<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <title>Finances Admin</title>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/target-admin.css') }}">

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

        </div>
        <!-- /.navbar-header -->

    </div>
    <!-- /.container -->

</div>
<!-- /.navbar -->

<div class="account-wrapper">

    <div class="account-body">

        <h4 class="account-body-subtitle">Faça o login.</h4>

        <form class="form account-form" method="post" action="{{route('login.attempt')}}">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="placeholder-hidden">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                       value="{{old('email')}}" tabindex="1" autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <!-- /.form-group -->
            <br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="placeholder-hidden">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                       tabindex="2">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <!-- /.form-group -->

            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="4">
                    Login &nbsp; <i class="fa fa-unlock-alt"></i>
                </button>
            </div>
            <!-- /.form-group -->
        </form>

    </div>
    <!-- /.account-body -->

</div>
<!-- /.account-wrapper -->

<script src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- App JS -->
<script src="{{ asset('js/target-admin.js') }}"></script>

</body>
</html>