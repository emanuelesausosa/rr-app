<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>RR - App | @yield('title')</title>

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
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    @include('layouts.topnavbar')
    <!-- End header-->

    <!-- Navigation-->
    @include('layouts.navigation')
    <!-- End navigation-->


    <!-- Main content-->
    @yield('content')
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