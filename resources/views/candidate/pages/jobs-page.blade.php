@extends('layouts.sidenav')

@section('include_content')

    @include('candidate.components.topbar')

    @include('candidate.components.sidebar')
@endsection

@section('content')

    <h2>Welcome to the Candidate Dashboard !</h2>

@endsection
