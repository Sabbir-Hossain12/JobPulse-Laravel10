
{{--EMPLOYER DASHBOARD--}}


@extends('layouts.sidenav')

@section('include_content')

    @include('employer.components.topbar')

    @include('employer.components.sidebar')
@endsection


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row gap-4">

        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Job Posted
                    </h5>
                    <p class="card-text">6</p>
                </div>

            </div>

        </div>
        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Employee
                    </h5>
                    <p class="card-text">N/A</p>
                </div>

            </div>

        </div>
        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Application
                    </h5>
                    <p class="card-text">5</p>
                </div>

            </div>

        </div>

    </div>

@endsection
