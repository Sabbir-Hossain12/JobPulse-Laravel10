@extends('layouts.sidenav')

@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
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
                            <a href="{{ url('/admin/candidates') }}">
                                <button class="btn btn-secondary">Back to Candidates</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="candidate-profile-container">
                            <h5>Candidate Information</h5>
                            <p>Candidate ID: {{ $candidateId }}</p>
                            <p>This is where candidate profile information would be displayed.</p>
                            <p>Placeholder for candidate details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->

@endsection