@extends('layouts.sidenav')

@section('include_content')

    @include('candidate.components.topbar')

    @include('candidate.components.sidebar')
@endsection

@section('content')

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
{{--                        <div><a href="{{url('/job-create')}}"><button class="btn btn-primary">Create Job</button></div></a>--}}
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
                                            <th>Applied at</th>


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

            await axios.get('/applications-candidate')
                .then(function (response) {
// Destroy existing DataTable instance
                    $('#tableData').DataTable().destroy();
                    // Handle the successful response
                    $('#tableList').empty();
                    response.data['data'].forEach(function (item, i) {
                        let foreach = ` <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">${i + 1}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">${item['job']['title']}</td>
                                            <td>${item['formatted_applied_at']}</td>

                                            <td><div class="d-flex gap-2"> <button  data-id=${item['id']} class="btn   btn-lg"><i class="far fa-eye"></i></button>

                                            </div></td>

                                                </tr>`

                        $('#tableList').append(foreach)

                        // <button class="btn btn-outline-primary"> </button>
                    })



                    $('.deletebtn').on('click', async function () {
                        let id = $(this).data('id');
                        $('#deleteID').val(id);
                        $('#delete-modal').modal('show');


                    })


                    $('#tableData').dataTable({
                        order: [[0, 'asc']],
                        pagingType: 'numbers'
                    });
                })
                .catch(function (error) {
                    // Handle errors
                    console.error('Error:', error);
                });


        }
    </script>


@endsection
