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
                            <h4 class="card-title">All Applications</h4>
                            <p class="card-title-desc">View all applications received for your job postings.</p>
                        </div>
                        <div>
                            <a href="{{ url('/employer/jobs') }}">
                                <button class="btn btn-primary">Manage Jobs</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="allApplicationsTable"
                                           class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline dataTable-wrapper">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Job Title</th>
                                            <th>Candidate Name</th>
                                            <th>Email</th>
                                            <th>Applied Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="allApplicationsList">
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
        (async () => {
            await loadAllApplications();
        })();

        async function loadAllApplications() {
            try {
                const response = await axios.get('/employer/applications-data');

                if(response.data.message === 'success') {
                    // Destroy existing DataTable instance if it exists
                    if ($.fn.DataTable.isDataTable('#allApplicationsTable')) {
                        $('#allApplicationsTable').DataTable().destroy();
                    }

                    // Clear the table
                    $('#allApplicationsList').empty();

                    const applications = response.data.data || [];

                    if(applications.length > 0) {
                        applications.forEach(function(application, index) {
                            const candidate = application.candidate || null;
                            const job = application.job || null;
                            const formattedDate = application.formatted_applied_at || application.created_at;

                            let row = `
                                <tr class="odd">
                                    <td class="dtr-control" tabindex="0">${index + 1}</td>
                                    <td class="dtr-control">${job ? job.title || 'N/A' : 'N/A'}</td>
                                    <td class="dtr-control">${candidate ? candidate.name || 'N/A' : 'N/A'}</td>
                                    <td class="dtr-control">${candidate ? candidate.email || 'N/A' : 'N/A'}</td>
                                    <td>${formattedDate}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="${candidate ? '/candidate/' + candidate.id + '/profile' : '#'}" class="btn btn-info btn-sm" target="_blank" ${!candidate ? 'onclick="event.preventDefault(); alert(\'Candidate profile not available\');"' : ''}>
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                            <a href="${job ? '/employer/job/' + job.id + '/applications' : '#'}" class="btn btn-success btn-sm" ${!job ? 'onclick="event.preventDefault(); alert(\'Job applications not available\');"' : ''}>
                                                <i class="fas fa-list"></i> Job Apps
                                            </a>
                                        </div>
                                    </td>
                                </tr>`;

                            $('#allApplicationsList').append(row);
                        });
                    } else {
                        $('#allApplicationsList').html(`
                            <tr>
                                <td colspan="6" class="text-center">No applications found.</td>
                            </tr>
                        `);
                    }

                    // Initialize DataTable
                    $('#allApplicationsTable').dataTable({
                        order: [[0, 'asc']],
                        pagingType: 'numbers'
                    });
                } else {
                    console.error('Error loading applications:', response.data.message || 'Unknown error');
                    showError('Failed to load applications: ' + (response.data.message || 'Status not success'));
                }
            } catch (error) {
                console.error('Error:', error);
                showError('An error occurred while loading applications: ' + error.message);
            }
        }

        function showError(message) {
            $('#allApplicationsList').html(`
                <tr>
                    <td colspan="6" class="text-center text-danger">${message}</td>
                </tr>
            `);
        }
    </script>

@endsection