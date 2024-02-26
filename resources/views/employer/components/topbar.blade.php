<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('/')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src=" {{asset('assets')}}/images/logo-sm.svg" alt="" height="24">
                                </span>
                    <span class="logo-lg">
                                    <img src=" {{asset('assets')}}/images/logo-sm.svg" alt="" height="24"> <span
                            class="logo-txt">JobPulse</span>
                                </span>
                </a>

                <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src=" {{asset('assets')}}/images/logo-sm.svg" alt="" height="24">
                                </span>
                    <span class="logo-lg">
                                    <img src=" {{asset('assets')}}/images/logo-sm.svg" alt="" height="24"> <span
                            class="logo-txt">JobPulse</span>
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>


            <!-- App Search-->
            {{--            <form class="app-search d-none d-lg-block">--}}
            {{--                <div class="position-relative">--}}
            {{--                    <input type="text" class="form-control" placeholder="Search...">--}}
            {{--                    <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>--}}
            {{--                </div>--}}
            {{--            </form>--}}
        </div>

        <div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Employer Dashboard</span></div>

        <div class="d-flex">


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-bell icon-lg">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="badge bg-danger rounded-pill">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar="init" style="max-height: 230px;">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                             class="rounded-circle avatar-sm" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">James Lemire</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">It will seem like simplified English.</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Your order is placed</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">If several languages coalesce the
                                                                grammar</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Your item is shipped</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">If several languages coalesce the
                                                                grammar</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src=" {{asset('assets')}}/images/users/avatar-6.jpg"
                                                             class="rounded-circle avatar-sm" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Salena Layfield</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">As a skeptical Cambridge friend of mine
                                                                occidental.</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                 style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                 style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>

{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn header-item right-bar-toggle me-2">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                         class="feather feather-settings icon-lg">--}}
{{--                        <circle cx="12" cy="12" r="3"></circle>--}}
{{--                        <path--}}
{{--                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src=" {{asset('assets')}}/images/users/avatar-1.jpg"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{Auth::guard('employer')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
{{-- item--}}
                    <a class="dropdown-item" href="{{route('profile.edit')}}"><i
                            class="mdi mdi-face-man-profile font-size-16 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('employer.logout')}}"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
