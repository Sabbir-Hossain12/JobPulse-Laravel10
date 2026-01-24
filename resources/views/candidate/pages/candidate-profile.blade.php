@extends('layouts.sidenav')

@section('include_content')

    @include('employer.components.topbar')

    @include('employer.components.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h4 class="card-title">Candidate Profile</h4>
                        <p class="card-title-desc">View detailed information about the candidate.</p>
                    </div>
                    <div>
                        <a href="{{ url('/employer/applications') }}">
                            <button class="btn btn-secondary">Back to Applications</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Personal Information</h5>
                            <p><strong>Name:</strong> {{ $candidate->name ?? 'N/A' }}</p>
                            <p><strong>Email:</strong> {{ $candidate->email ?? 'N/A' }}</p>
                            <p><strong>Member Since:</strong> {{ $candidate->created_at ? $candidate->created_at->format('M d, Y') : 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Profile Information</h5>
                            @if($profile)
                                <p><strong>Contact:</strong> {{ $profile->contact_number ?? 'N/A' }}</p>
                                <p><strong>Address:</strong> {{ $profile->address ?? 'N/A' }}</p>
                                <p><strong>Portfolio:</strong>
                                    @if($profile->portfolio_url)
                                        <a href="{{ $profile->portfolio_url }}" target="_blank">{{ $profile->portfolio_url }}</a>
                                    @else
                                        N/A
                                    @endif
                                </p>
                                <p><strong>LinkedIn:</strong>
                                    @if($profile->linkedin_url)
                                        <a href="{{ $profile->linkedin_url }}" target="_blank">{{ $profile->linkedin_url }}</a>
                                    @else
                                        N/A
                                    @endif
                                </p>
                            @else
                                <p>No additional profile information available.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection