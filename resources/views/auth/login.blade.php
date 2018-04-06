<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>RR - App | Login</title>

   <!-- Vendor styles -->
   <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome/css/font-awesome.css')}}"/>
   <link rel="stylesheet" href="{{ asset('css/vendor/animate.css/animate.css')}}"/>
   <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap/css/bootstrap.css')}}"/>

   <!-- App styles -->
   <link rel="stylesheet" href="{{ asset('css/pe-icons/pe-icon-7-stroke.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/pe-icons/helper.css')}}"/>
   <link rel="stylesheet" href="{{ asset('css/stroke-icons/style.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">       

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="{{route('post-login')}}" id="loginForm" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-accent pull-right">Login</button>                            
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{ asset('js/vendor/pacejs/pace.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- App scripts -->
<script src="{{ asset('js/luna.js')}}"></script>

</body>

</html>