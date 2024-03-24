<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2 col-3 col-sm-3">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img class="img-fluid w-sm-75" src=" {{asset('frontend')}}/assets/img/logo/logov2.png"
                                                        alt="" style="width: 199px"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-8 col-sm-9 d-flex align-items-center">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/jobs-page')}}">Find a Jobs </a></li>
                                        <li><a href="{{url('/about-us')}}">About</a></li>
                                        <li><a href="{{url('/blogs-page')}}">Blogs</a></li>
                                        <li><a href="{{url('/contact-us')}}">Contact</a></li>

                                    </ul>


                                </nav>

                            </div>

                            @if(!Auth::user() && !Auth::guard('admin')->user() && !Auth::guard('employer')->user())
                        <div class="d-flex">
                                <div class="dropdown">
                                    <button class="genric-btn primary head-btn1 dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Login
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('login')}}">Candidate</a>
                                        <a class="dropdown-item" href="{{route('employer.login')}}">Employer</a>
                                        <a class="dropdown-item" href="{{route('admin.login')}}">Admin</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <button class=" m-lg-0 genric-btn primary-border radius head-btn2 btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                        Registration
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('register')}}">Candidate</a>
                                        <a class="dropdown-item" href="{{route('employer.register')}}">Employer</a>

                                    </div>
                                </div>
                            @endif
                        </div>
                            @auth('web')
                                <div class="dropdown">
                                    <button class="genric-btn primary-border head-btn2 btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                        Hi,{{Auth::user()->name }}
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('candidate.dashboard')}}">Go to
                                            Dashboard</a>
                                        <a class="dropdown-item" href="{{route('logout')}}">LogOut</a>

                                    </div>
                                </div>
                            @endauth

                            @auth('admin')
                                <div class="dropdown">
                                    <button class="genric-btn primary-border head-btn2 btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                        Hi,{{Auth::guard('admin')->user()->name  }}
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.dashboard')}}">Go to
                                            Dashboard</a>
                                        <a class="dropdown-item" href="{{route('admin.logout')}}">LogOut</a>

                                    </div>
                                </div>
                            @endauth

                            @auth('employer')
                                <div class="dropdown">
                                    <button class="genric-btn primary-border head-btn2 btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                        Hi,{{Auth::guard('employer')->user()->name  }}
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('employer.dashboard')}}">Go to
                                            Dashboard</a>
                                        <a class="dropdown-item" href="{{route('employer.logout')}}">LogOut</a>

                                    </div>
                                </div>
                            @endauth




                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
