@extends('layouts.home')



@section('content')
    @include('components.home page.header')

    <!-- About 2 - Bootstrap Brain Component -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy"
                         src="https://images.unsplash.com/photo-1491975474562-1f4e30bc9468?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8am9iJTIwcG9ydGFsfGVufDB8MXwwfHx8MA%3D%3D"
                         alt="About 2" style="height:600px">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-10">
                            <h2 class="mb-3">Why Choose Us?</h2>
                            <p class="lead fs-4 mb-3 mb-xl-5">With years of experience and deep industry knowledge, we
                                have a proven track record of success and are constantly pushing ourselves to stay ahead
                                of the curve.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                         class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0">Our evolution procedure is super intelligent.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                         class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0">We deliver services beyond expectations.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4 mb-xl-5">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                         class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
                                </div>
                            </div>
                            <button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.home page.footer')

@endsection
