{{--Header--}}

<nav class="navbar navbar-expand-lg bg-soft-light rounded" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bx bx-shekel "></i>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">
                        <button class="btn btn-rounded btn-primary">Home</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">
                        <button class="btn btn-rounded btn-primary">About</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">
                        <button class="btn btn-rounded btn-primary">Jobs</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">
                        <button class="btn btn-rounded btn-primary">Blogs</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">
                        <button class="btn btn-rounded btn-primary">Contacts</button>
                    </a>
                </li>


            </ul>
            {{--            <div class="d-lg-flex col-lg-3 justify-content-lg-end">--}}
            {{--                <button class="btn btn-primary">Button</button>--}}

            {{--            </div>--}}


            {{--            Login/Registration/Dashboard--}}


            <div class="d-flex gap-2 justify-content-evenly align-items-center">

                {{--Admin Dashboard--}}
                @auth('admin')
                    <div class="btn-group">
                        <button type="button" class="btn btn-rounded btn-success btn- dropdown-toggle "
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Hi,{{Auth::guard('admin')->user()->name  }} </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">Go to Dashboard</a>
                            <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>


                        </div>
                    </div>
                @endauth

                {{--Candidate Dashboard--}}
                @auth('web')
                    <div class="btn-group">
                        <button type="button" class="btn btn-rounded btn-success btn- dropdown-toggle "
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Hi,{{Auth::user()->name }} </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('candidate.dashboard')}}">Go to Dashboard</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>


                        </div>
                    </div>
                @endauth
                {{--Employer Dashboard--}}
                @auth('employer')
                    <div class="btn-group">
                        <button type="button" class="btn btn-rounded btn-success btn- dropdown-toggle "
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Hi,{{Auth::guard('employer')->user()->name }} </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('employer.dashboard')}}">Go to Dashboard</a>
                            <a class="dropdown-item" href="{{route('employer.logout')}}">Logout</a>


                        </div>
                    </div>
                @endauth





                @if(!Auth::user() && !Auth::guard('admin')->user() && !Auth::guard('employer')->user())
                    <div class="btn-group">
                        <button type="button" class="btn btn-rounded btn-success dropdown-toggle "
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Login
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('login')}}">Candidate</a>
                            <a class="dropdown-item" href="{{route('employer.login')}}">Employer</a>
                            <a class="dropdown-item" href="{{route('admin.login')}}">Admin</a>


                        </div>
                    </div>



                    <div class="btn-group">
                        <button type="button" class="btn btn-rounded btn-danger dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Register
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('register')}}">Candidate</a>
                            <a class="dropdown-item" href="{{route('employer.register')}}">Employer</a>

                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
</nav>
