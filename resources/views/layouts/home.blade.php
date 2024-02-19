<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>JobPulse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>




    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-1/assets/css/hero-1.css">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}} ">

    <!-- preloader css -->
    {{--    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css"/>--}}


    <!-- Bootstrap Css -->
    <link href=" {{asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href=" {{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href=" {{asset('assets')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>
    {{--Custome--}}
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}"/>
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}"
          rel="stylesheet"/>

    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>


    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>


</head>

<body>




<main>

@yield('content')
</main>






<!-- JAVASCRIPT -->
<script src=" {{asset('assets')}}/libs/jquery/jquery.min.js"></script>
<script src=" {{asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" {{asset('assets')}}/libs/metismenu/metisMenu.min.js"></script>
<script src=" {{asset('assets')}}/libs/simplebar/simplebar.min.js"></script>
<script src=" {{asset('assets')}}/libs/node-waves/waves.min.js"></script>
<script src=" {{asset('assets')}}/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src=" {{asset('assets')}}/libs/pace-js/pace.min.js"></script>

<script src=" {{asset('assets')}}/js/app.js"></script>


</body>


</html>
