{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}



@extends('layouts.sidenav')

@section('include_content')

    @include('candidate.components.topbar')

    @include('candidate.components.sidebar')
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">

                            <span class="text-muted mb-3 lh-1 d-block text-truncate card-title">Job Applied</span>
                            <h4 class="mb-3">
                                <span class="counter-value" id="appliedJobCount"></span>
                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">

                            <span class="text-muted mb-3 lh-1 d-block text-truncate card-title">Job Saved</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="1">9</span>
                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


    </div>
    <script>
        (async () => {
            await jobList();
        })();

        async function jobList() {

            await axios.get('/applications-candidate')
                .then(function (response) {

           let appliedJob=response.data['data'].length
                    $('#appliedJobCount').text(appliedJob)
                }).catch(function (error) {
                    // Handle errors
                    console.error('Error:', error);
                })

        }
        </script>
@endsection
