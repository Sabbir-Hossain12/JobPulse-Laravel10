<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>JobPulse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>




    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-1/assets/css/hero-1.css">

    <link rel="stylesheet" href=" {{asset('https://unpkg.com/bs-brain@2.0.3/components/abouts/about-2/assets/css/about-2.css')}}">
    <link rel="shortcut icon" href=" {{asset('assets')}}/images/favicon.ico">

    <!-- preloader css -->
    {{--    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css"/>--}}


    <!-- Bootstrap Css -->
    <link href=" {{asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>

    <!-- Icons Css -->
    <link href=" {{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css"/>

    {{--Custom--}}

    <link href="{{asset('assets/css/toastify.min.css')}}" rel="stylesheet"/>

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}"  rel="stylesheet"/>


    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('assets/js/axios.min.js')}}"></script>



    <script src="{{asset('assets/js/toastify-js.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>


</head>

<body>




<main>

@yield('content')
</main>






<!-- JAVASCRIPT -->
<script src=" {{asset('assets')}}/libs/jquery/jquery.min.js"></script>
<script src=" {{asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>







</body>


</html>
