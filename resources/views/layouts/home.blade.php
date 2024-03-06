<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>JobPulse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>

    <!-- CSS here -->


    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/price_rangs.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/slicknav.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href=" {{asset('frontend')}}/assets/css/style.css">



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900|Muli:300,400,500,600,700,800,900&display=swap">




    {{--Custom--}}

    <link href="{{asset('assets/css/toastify.min.css')}}" rel="stylesheet"/>


{{--    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>--}}
    <script src="{{asset('assets/js/axios.min.js')}}"></script>



    <script src="{{asset('assets/js/toastify-js.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>


</head>

<body style="overflow: visible;">

@include('components.home page.header')


<main>

    <div id="preloader-active" >
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src=" {{asset('assets')}}/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>

@yield('content')
</main>





@include('components.home page.footer')









<!-- JAVASCRIPT -->

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src=" {{asset('frontend')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=" {{asset('frontend')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/popper.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src=" {{asset('frontend')}}//assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=" {{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/slick.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/price_rangs.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src=" {{asset('frontend')}}/assets/js/wow.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/animated.headline.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src=" {{asset('frontend')}}/assets/js/jquery.scrollUp.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.nice-select.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src=" {{asset('frontend')}}/assets/js/contact.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.form.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.validate.min.js"></script>
<script src=" {{asset('frontend')}}/assets/js/mail-script.js"></script>
<script src=" {{asset('frontend')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src=" {{asset('frontend')}}/assets/js/plugins.js"></script>
<script src=" {{asset('frontend')}}/assets/js/main.js"></script>




</body>


</html>
