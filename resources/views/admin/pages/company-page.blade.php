@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


@include('admin.components.employer.employer-list')
@include('admin.components.employer.employer-update')
@include('admin.components.employer.employer-delete')





@endsection
