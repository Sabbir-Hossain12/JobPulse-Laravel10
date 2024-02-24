@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')

    <div class="container-fluid">

        <!-- start page title -->
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="page-title-box d-sm-flex align-items-center justify-content-between">--}}
{{--                    <h4 class="mb-sm-0 font-size-18">Company List</h4>--}}

{{--                    <div class="page-title-right">--}}
{{--                        <ol class="breadcrumb m-0">--}}
{{--                            <li class="breadcrumb-item"><a href="">Company List</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Company List</h4>
                        <p class="card-title-desc">In This Section we will find Comapny list and Comapany Details.
                        </p>
                    </div>
                    <div class="card-body">

                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                           class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline dataTable-wrapper"
                                           role="grid" aria-describedby="datatable_info" style="width: 1573px;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable"
                                                rowspan="1" colspan="1" style="width: 258px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">SN
                                            </th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable"
                                                rowspan="1" colspan="1" style="width: 258px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Employer Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 397px;"
                                                aria-label="Position: activate to sort column ascending">Employer Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 202px;"
                                                aria-label="Office: activate to sort column ascending">Status
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" style="width: 105px;"
                                                aria-label="Age: activate to sort column ascending">Action
                                            </th>

                                        </tr>
                                        </thead>


                                        <tbody id="employerList">





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


{{--Delete Modal--}}
    <div class="modal animated zoomIn" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" mt-3 text-warning">Delete !</h3>
                    <p class="mb-3">Once delete, you can't get it back.</p>
                    <input class="" id="deleteID"/>
                </div>
                <div class="modal-footer justify-content-end">
                    <div>
                        <button type="button" id="delete-modal-close" class="btn bg-gradient-success mx-2" data-bs-dismiss="modal">Cancel</button>
                        <button onclick="itemDelete()" type="button" id="confirmDelete" class="btn bg-gradient-danger" >Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
employerList();
      async  function employerList()
        {

           await axios.get('/employer-list')
                .then(function (response) {
                    // Handle the successful response
                    $('#employerList').empty();
                    response.data['data'].forEach(function (item,i)
                    {
                        let foreach= `  <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">${i+1}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">${item['name']}</td>
                                            <td>${item['email']}</td>
                                            <td><button data-status=${item['status']} class="btn btn-outline-primary">${item['status']}</button> </td>

                                            <td><div class="d-flex gap-2"><button data-id=${item['id']} class="btn btn-lg editbtn"><i class="fas fa-edit"></i></button>
                                            <button  data-id=${item['id']} class="btn  deletebtn btn-lg"><i class="fas fa-trash-alt"></i></button></div></td>

                                        </tr>`

                        $('#employerList').append(foreach)

                        // <button class="btn btn-outline-primary"> </button>
                    })

                    $('.editbtn').on('click',function ()
                    {
                        let id= $(this).data('id');
                        // alert(id);
                    })

                    $('.deletebtn').on('click',async function ()
                    {
                        let id= $(this).data('id');
                       $('#deleteID').val(id);
                       $('#delete-modal').modal('show');




                    })


                    $('#datatable').dataTable();
                })
                .catch(function (error) {
                    // Handle errors
                    console.error('Error:', error);
                });


        }


        async function itemDelete()
        {
             let id= $('#deleteID').val();

             if(id.length===0)
             {
                    errorToast('ID Required !')
             }
             else
             {
                 await axios.get(`/employer-remove/${id}`).then( async function (res)
                 {
                     if(res.data['message']==='success')
                     {
                         successToast('Employer Removed !')


                         await employerList();
                        $('#delete-modal-close').click();

                     }


                 }).catch(function (error)
                 {
                     console.log(error)
                 })
             }
        }


    </script>

@endsection
