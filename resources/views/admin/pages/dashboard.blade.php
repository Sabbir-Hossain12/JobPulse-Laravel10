
@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


<div class="row gap-4">

    <div class="col-lg-2 ">

        <div class="card w-100">

        <div class="card-body">
            <h5 class="card-title">
              Active Companies
            </h5>
            <p class="card-text">50</p>
        </div>

        </div>

    </div>
    <div class="col-lg-2 ">

        <div class="card w-100">

            <div class="card-body">
                <h5 class="card-title">
                    Pending Companies
                </h5>
                <p class="card-text">150</p>
            </div>

        </div>

    </div>
    <div class="col-lg-2 ">

        <div class="card w-100">

            <div class="card-body">
                <h5 class="card-title">
                    Jobs
                </h5>
                <p class="card-text">250</p>
            </div>

        </div>

    </div>

</div>

@endsection
