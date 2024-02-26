@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


    @include('admin.components.candidate.candidate-list')
    @include('admin.components.candidate.candidate-update')
    @include('admin.components.candidate.candidate-delete')





@endsection
