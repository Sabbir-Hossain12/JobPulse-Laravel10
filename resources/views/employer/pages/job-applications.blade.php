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
                            <h4 class="card-title">Job Applications</h4>
                            <p class="card-title-desc">View all applications for this job posting.</p>
                        </div>
                        <div>
                            <a href="{{ url('/employer/jobs') }}">
                                <button class="btn btn-secondary">Back to Jobs</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="applicationsTable"
                                           class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline dataTable-wrapper">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Candidate Name</th>
                                            <th>Email</th>
                                            <th>Applied Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="applicationsList">
                                        <!-- Data will be loaded here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->

    <script>
        const jobId = "{{ $jobId }}";

        (async () => {
            await loadJobApplications();
        })();

        async function loadJobApplications() {
            try {
                const response = await axios.get(`/employer/job-applications/${jobId}`);

                if(response.data.message === 'success') {
                    // Destroy existing DataTable instance
                    if ($.fn.DataTable.isDataTable('#applicationsTable')) {
                        $('#applicationsTable').DataTable().destroy();
                    }

                    // Clear the table
                    $('#applicationsList').empty();

                    const applications = response.data.data || [];

                    if(applications.length > 0) {
                        applications.forEach(function(application, index) {
                            const candidate = application.candidate || null;
                            const formattedDate = application.formatted_applied_at || application.created_at;

                            let row = `
                                <tr class="odd">
                                    <td class="dtr-control" tabindex="0">${index + 1}</td>
                                    <td class="dtr-control">${candidate ? candidate.name || 'N/A' : 'N/A'}</td>
                                    <td class="dtr-control">${candidate ? candidate.email || 'N/A' : 'N/A'}</td>
                                    <td>${formattedDate}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="${candidate ? '/candidate/' + candidate.id + '/profile' : '#'}" class="btn btn-info btn-sm" target="_blank" ${!candidate ? 'onclick="event.preventDefault(); alert(\'Candidate profile not available\');"' : ''}>
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </td>
                                </tr>`;

                            $('#applicationsList').append(row);
                        });
                    } else {
                        $('#applicationsList').html(`
                            <tr>
                                <td colspan="5" class="text-center">No applications found for this job.</td>
                            </tr>
                        `);
                    }

                    // Initialize DataTable
                    $('#applicationsTable').dataTable({
                        order: [[0, 'asc']],
                        pagingType: 'numbers'
                    });
                } else {
                    console.error('Error loading applications:', response.data.message);
                    showError('Failed to load applications: ' + (response.data.message || 'Message not success'));
                }
            } catch (error) {
                console.error('Error:', error);
                showError('An error occurred while loading applications.');
            }
        }

        function showError(message) {
            $('#applicationsList').html(`
                <tr>
                    <td colspan="5" class="text-center text-danger">${message}</td>
                </tr>
            `);
        }
    </script>

@endsection