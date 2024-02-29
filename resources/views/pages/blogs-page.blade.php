@extends('layouts.home')



@section('content')

    @include('components.home page.header')

    <!-- Blog 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container overflow-hidden">
            <div class="row gy-5">
                <div class="col-12">
                    <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                            <div class="img-wrapper position-relative bsb-hover-push">
                                <a href="#!">
                                    <span class="badge rounded-pill text-bg-warning position-absolute top-0 start-0 m-3">Jobs</span>
                                    <img class="img-fluid rounded w-100 h-100 object-fit-cover" loading="lazy" src="https://plus.unsplash.com/premium_photo-1679547202646-331fe6ce8a40?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sports">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div>
                                <p class="text-secondary mb-1">Nov 11, 2022</p>
                                <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Behind the Scenes: Employer Insights</a></h2>
                                <p class="mb-4">Exploring Company Cultures and Hiring Practices</p>
                                <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                            <div class="img-wrapper position-relative bsb-hover-push">
                                <a href="#!">
                                    <span class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">Jobs</span>
                                    <img class="img-fluid rounded w-100 h-100 object-fit-cover" loading="lazy" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Travel">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div>
                                <p class="text-secondary mb-1">Oct 9, 2022</p>
                                <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Mastering the Job Search Game</a></h2>
                                <p class="mb-4">Proven Strategies to Land Your Dream Job in 2024.</p>
                                <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                            <div class="img-wrapper position-relative bsb-hover-push">
                                <a href="#!">
                                    <span class="badge rounded-pill text-bg-warning position-absolute top-0 start-0 m-3">Jobs</span>
                                    <img class="img-fluid rounded w-100 h-100 object-fit-cover" loading="lazy" src="https://images.unsplash.com/photo-1542626991-cbc4e32524cc?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Photography">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div>
                                <p class="text-secondary mb-1">Sep 17, 2022</p>
                                <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Your Interview Roadmap</a></h2>
                                <p class="mb-4">A Comprehensive Guide to Acing Job Interviews.</p>
                                <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                            <div class="img-wrapper position-relative bsb-hover-push">
                                <a href="#!">
                                    <span class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">Jobs</span>
                                    <img class="img-fluid rounded w-100 h-100 object-fit-cover" loading="lazy" src="https://images.unsplash.com/photo-1635350736475-c8cef4b21906?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Food">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div>
                                <p class="text-secondary mb-1">Aug 23, 2022</p>
                                <h2 class="h1 mb-3"><a class="link-dark text-decoration-none" href="#!">Future-Ready Careers</a></h2>
                                <p class="mb-4">Top Skills and Industries for 2024 and Beyond</p>
                                <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.home page.footer')


@endsection
