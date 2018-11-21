<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPEG UNB</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
        <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 10">

                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img src="https://unb.ac.id/wp-content/uploads/2014/04/logo-unb-2016.png" height=" 300">
                            <strong style="margin-left:20px;">
                                  <h1>  <b>SISTEM KEPEGAWAIAN </b>UNB </h1>
                            </strong>
                        </a>
                    </div>
                    <!-- start:navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <strong>
                                <i class="fa fa-bars"></i> Menu Perpustakaan
                            </strong>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right top-menu" role="navigation">
                                <li class="">
                                    <a href="https://unb.ac.id/">
                                        <div class="text-center">
                                            <i class="fa fa-globe"></i> WEB
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="cv">
                                        <div class="text-center">
                                            <i class="fa fa-phone"></i> Contac Me
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="http://maps.google.com">
                                        <div class="text-center">
                                            <i class="fa fa-map"></i> Maps
                                        </div>
                                    </a>
                                </li>
                                <li class="hidden-xs">
                                        <a>
                                            <i class="fa fa-clock-o"></i> <span id="jamweke">11:18:35</span>
                                            <script type="text/javascript">
                                                <!--
                                                function startTime() {
                                                    var today=new Date(),
                                                        curr_hour=today.getHours(),
                                                        curr_min=today.getMinutes(),
                                                        curr_sec=today.getSeconds();
                                                 curr_hour=checkTime(curr_hour);
                                                    curr_min=checkTime(curr_min);
                                                    curr_sec=checkTime(curr_sec);
                                                    document.getElementById('jamweke').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
                                                }
                                                function checkTime(i) {
                                                    if (i<10) {
                                                        i="0" + i;
                                                    }
                                                    return i;
                                                }
                                                setInterval(startTime, 500);
                                                //-->
                                            </script>
                                        </a>
                                    </li>
                                <li class="active">
                                    <a href="register">
                                        <div class="text-center">
                                            <i class="fa fa-user"></i> register
                                        </div>
                                    </a>
                                </li>
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><br> </br>  </a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Login</p>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
