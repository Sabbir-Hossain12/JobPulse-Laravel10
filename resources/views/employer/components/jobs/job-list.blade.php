<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <div>
                    <h4 class="card-title">Job List</h4>
                    <p class="card-title-desc">In This Section we will find Job list and Create Jobs.
                    </p>
                    </div>
                    <div><a href="{{url('/job-create')}}"><button class="btn btn-primary">Create Job</button></div></a>
                </div>
                <div class="card-body">

                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="tableData"
                                       class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline dataTable-wrapper"
                                       style="width: 1573px;">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Job Title</th>
                                        <th>Posted at</th>
                                        <th>Deadline</th>
                                        <th>Added by</th>
                                        <th>Applied</th>

                                        <th>Action
                                        </th>

                                    </tr>
                                    </thead>


                                    <tbody id="tableList">

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<script>
    (async () => {
        await jobList();
    })();

    async function jobList() {
        try {
            const response = await axios.get('/employer/job-list');

            if(response.data.message === 'success') {
                const jobList = response.data.data;

                // Destroy existing DataTable instance
                if ($.fn.DataTable.isDataTable('#tableData')) {
                    $('#tableData').DataTable().destroy();
                }

                // Handle the successful response
                $('#tableList').empty();

                jobList.forEach(function (item, i) {
                    let foreach = ` <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">${i + 1}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">${item['title']}</td>
                                            <td>${item['posted_at']}</td>
                                            <td>${item['deadline']}</td>
                                            <td>${item['employer'] ? item['employer']['name'] : 'N/A'}</td>
                                            <td>${item['applications'] ? item['applications'].length : 0}</td>
                                            <td><div class="d-flex gap-2">
                                                <button data-id="${item['id']}" class="btn btn-primary view-applications-btn btn-lg" title="View Applications">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                               <button data-id="${item['id']}" class="btn btn-lg editbtn"><i class="fas fa-edit"></i></button>
                                            <button  data-id="${item['id']}" class="btn  deletebtn btn-lg"><i class="fas fa-trash-alt"></i></button>

                                            </div></td>`;

                    $('#tableList').append(foreach)
                });

                // Add event listener for view applications button
                $('.view-applications-btn').on('click', function () {
                    let jobId = $(this).data('id');
                    window.location.href = `/employer/job/${jobId}/applications`;  // Redirect to applications page
                });

                // Add event listeners for edit and delete buttons
                $('.editbtn').on('click', async function () {
                    let id = $(this).data('id');
                    $('#updateID').val(id);
                    // Assuming there's a modal with ID 'update-modal'
                    if($('#update-modal').length) {
                        $('#update-modal').modal('show');
                    }

                    await fillCandidateData()
                });

                $('.deletebtn').on('click', async function () {
                    let id = $(this).data('id');
                    $('#deleteID').val(id);
                    // Assuming there's a modal with ID 'delete-modal'
                    if($('#delete-modal').length) {
                        $('#delete-modal').modal('show');
                    }
                });

                $('#tableData').dataTable({
                    order: [[0, 'asc']],
                    pagingType: 'numbers'
                });
            } else {
                console.error('Error loading job list:', response.data.message);
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }
</script>
