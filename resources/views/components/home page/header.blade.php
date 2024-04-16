<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 col-sm-3">
                        <!-- Logo -->
                        <div class="logo d-flex align-items-center justify-content-center">
                            <a href="{{url('/')}}"><img class="img-fluid "
                                                        src=" {{asset('frontend')}}/assets/img/logo/logov2.png"
                                                        alt="" style="width: 122px ; height: 30px"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-9 col-sm-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/jobs-page')}}">Find a Jobs </a></li>
                                        <li><a href="{{url('/about-us')}}">About</a></li>
                                        <li><a href="{{url('/blogs-page')}}">Blogs</a></li>
                                        <li class="mr-lg-4"><a href="{{url('/contact-us')}}">Contact</a></li>
                                        @if(!Auth::guard('web')->check() && !Auth::guard('admin')->check() && !Auth::guard('employer')->check())
                                            <li class="dropdown">
                                                <button href="#" class="dropdown-toggle genric-btn primary head-btn1"
                                                        data-toggle="dropdown">Login <span class="caret"></span>
                                                </button>
                                                <ul class="submenu">
                                                    <li><a class="dropdown-item"
                                                           href="{{route('admin.login')}}">Admin</a></li>
                                                    <li><a class="dropdown-item" href="{{route('employer.login')}}">Employer</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{route('login')}}">Candidate</a>
                                                    </li>
                                                    <!-- Add more dropdown items here -->
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <button href="#"
                                                        class="dropdown-toggle m-lg-0 genric-btn primary-border radius head-btn2 btn-sm"
                                                        data-toggle="dropdown">Register <span class="caret"></span>
                                                </button>
                                                <ul class="submenu">
                                                    <li><a class="dropdown-item"
                                                           href="{{route('employer.register')}}">Employer</a></li>
                                                    <li><a class="dropdown-item" href="{{route('register')}}">Candidate</a>
                                                    </li>
                                                    <!-- Add more dropdown items here -->
                                                </ul>
                                            </li>
                                        @else
                                            @auth('web')
                                                <li class="dropdown">
                                                    <button
                                                        class="genric-btn primary-border head-btn2 btn-sm dropdown-toggle"
                                                        type="button"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Hi,{{Auth::user()->name }}
                                                    </button>
                                                    <ul class="submenu">
                                                      <li>  <a class="dropdown-item"
                                                           href="{{route('candidate.dashboard')}}">Go to
                                                            Dashboard</a></li>
                                                      <li>  <a class="dropdown-item" href="{{route('logout')}}">LogOut</a></li>

                                                    </ul>
                                                </li>
                                            @endauth
                                            @auth('employer')
                                                <li class="dropdown">
                                                    <button
                                                        class="genric-btn primary-border head-btn2 btn-sm dropdown-toggle"
                                                        type="button"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Hi,{{Auth::guard('employer')->user()->name  }}
                                                    </button>
                                                    <ul class="submenu">
                                                       <li> <a class="dropdown-item" href="{{route('employer.dashboard')}}">Go
                                                            to
                                                            Dashboard</a></li>
                                                     <li>  <a class="dropdown-item" href="{{route('employer.logout')}}">LogOut</a></li>

                                                    </ul>
                                                </li>
                                            @endauth
                                            @auth('admin')
                                                <li class="dropdown">
                                                    <button
                                                        class="dropdown-toggle genric-btn primary-border head-btn2 btn-sm "
                                                        type="button"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Hi,{{Auth::guard('admin')->user()->name  }}
                                                    </button>
                                                    <ul class="submenu">
                                                        <li><a class="dropdown-item"
                                                               href="{{route('admin.dashboard')}}">Go
                                                                to
                                                                Dashboard</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="{{route('admin.logout')}}">LogOut</a></li>

                                                    </ul>
                                                </li>
                                            @endauth

                                        @endif
                                    </ul>


                                </nav>

                            </div>


                        </div>

                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12 mt-4 mt-sm-4 mt-md-4 mt-lg-0">
                    <div class="mobile_menu d-block d-lg-none ">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->
</header>


{{--<header>--}}
{{--    <!-- Header Start -->--}}
{{--    <div class="header-area header-transparrent">--}}
{{--        <div class="headder-top header-sticky">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-3 col-md-2">--}}
{{--                        <!-- Logo -->--}}
{{--                        <div class="logo">--}}
{{--                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-9 col-md-9">--}}
{{--                        <div class="menu-wrapper">--}}
{{--                            <!-- Main-menu -->--}}
{{--                            <div class="main-menu">--}}
{{--                                <nav class="d-none d-lg-block">--}}
{{--                                    <ul id="navigation">--}}
{{--                                        <li><a href="index.html">Home</a></li>--}}
{{--                                        <li><a href="job_listing.html">Find a Jobs </a></li>--}}
{{--                                        <li><a href="about.html">About</a></li>--}}
{{--                                        <li><a href="#">Page</a>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="blog.html">Blog</a></li>--}}
{{--                                                <li><a href="single-blog.html">Blog Details</a></li>--}}
{{--                                                <li><a href="elements.html">Elements</a></li>--}}
{{--                                                <li><a href="job_details.html">job Details</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="contact.html">Contact</a></li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                            <!-- Header-btn -->--}}
{{--                            <div class="header-btn d-none f-right d-lg-block">--}}
{{--                                <a href="#" class="btn head-btn1">Register</a>--}}
{{--                                <a href="#" class="btn head-btn2">Login</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Mobile Menu -->--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">--}}
{{--                                    <li><a href="index.html" role="menuitem" tabindex="-1">Home</a></li>--}}
{{--                                    <li><a href="job_listing.html" role="menuitem" tabindex="-1">Find a Jobs </a></li>--}}
{{--                                    <li><a href="about.html" role="menuitem" tabindex="-1">About</a></li>--}}
{{--                                    <li class="slicknav_parent slicknav_collapsed"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">Page</a>--}}
{{--                                            <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">--}}
{{--                                            <li><a href="blog.html" role="menuitem" tabindex="-1">Blog</a></li>--}}
{{--                                            <li><a href="single-blog.html" role="menuitem" tabindex="-1">Blog Details</a></li>--}}
{{--                                            <li><a href="elements.html" role="menuitem" tabindex="-1">Elements</a></li>--}}
{{--                                            <li><a href="job_details.html" role="menuitem" tabindex="-1">job Details</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>--}}
{{--                                </ul></div></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Header End -->--}}
{{--</header>--}}
