@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


@include('admin.components.jobs.job-list')






@endsection
