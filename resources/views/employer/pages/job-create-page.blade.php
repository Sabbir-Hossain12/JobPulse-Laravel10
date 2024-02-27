@extends('layouts.sidenav')

@section('include_content')

    @include('employer.components.topbar')

    @include('employer.components.sidebar')
@endsection


@section('content')

    @include('employer.components.jobs.job-create')

@endsection
