<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADgainer Solutions</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
{{--<link rel="stylesheet" href="{{asset('custom/dist/css/AdminLTE.min.css')}}">--}}
<!-- iCheck -->
    <link rel="stylesheet"
          href="{{asset('custom/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <style>
        sup {
            vertical-align: super;
            font-size: smaller;
            color: #F00000;
        }

        .icon {
            width: 1em;

        }

        #login_btn i {
            margin-right: 5px;
        }

        #login_form {
            background: #fff !important;
            padding: 20px !important;
            border-top: 0 !important;
            color: #666 !important;
        }
      body{
            background-image: url('/images/background_login.jpg');
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100%;

        }

    </style>
</head>


<body class="gray-bg">
    @include('v1.layouts.topnavbar')

<div class="loginscreen animated fadeInDown">
    <div>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading"><b>ADgainer Solutions</b></div>

                <div class="panel-body"><p>Managing and optimizing not only your local
and global campaigns, but also your
return on investment.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login<b></div>

                <div class="panel-body">
           <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                           </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Password</label>
<div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                           </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/request') }}">
                                    Forgot Your Password?
                                </a>
                           </div>
                        </div>
                    </form>

       
    </div>
</div>




     <!-- <!--    <div class="logo-name">

            <b>Ambulance.</b>run<br>
            Operator</a><sup style="font-size: 12px;">Beta</sup>

        </div> -->
      <!--   <div class="login_form">
            <form class="m-t" role="form" id="login_form" method="POST"
                  action="{{ url('/login') }}">{{ csrf_field() }}
                <p>Sign in to start your session</p>

                <div class="form-group has-feedback {{ $errors->has('phone_number') ? ' has-error' : 'has-feedback' }}">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone icon"></i>
                        </div>
                        <input id="phone_number" type="text"
                               placeholder="Phone Number" class="form-control"
                               name="phone_number"
                               value="{{ old('phone_number') }}" required
                               autofocus>

                    </div>
                    @if ($errors->has('phone_number'))
                        <span class="help-block">
            <strong>{{ $errors->first('phone_number') }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock icon"></i>
                        </div>
                        <input id="password" type="password"
                               placeholder="Password" class="form-control"
                               name="password" required>

                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <div class="checkbox icheck">
                            <label style="padding-left: 0px !important;">
                                <input type="checkbox" name="remember"> Remember
                                Me
                            </label>
                        </div>
                    </div> -->
                    <!-- /.col -->
                   <!--  <div class="col-md-5 col-sm-4" id="login_btn">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i
                                    class="fa fa-unlock"></i> Sign In
                        </button>
                    </div> -->
                    <!-- /.col -->
                <!-- </div> -->
               
              
            </form>
        </div>
    </div> 
</div>
</body>

<!-- jQuery 2.2.3 -->
<script src="{{asset('custom/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('custom/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('custom/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>