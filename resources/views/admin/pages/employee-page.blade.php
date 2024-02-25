@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


    @include('admin.components.employee.employee-list')
  @include('admin.components.employee.employee-update')
 @include('admin.components.employee.employee-delete')





@endsection
