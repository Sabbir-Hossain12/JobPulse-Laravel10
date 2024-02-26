<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Candidate List</h4>
                    <p class="card-title-desc">In This Section we will find Candidate list and Candidate Details.
                    </p>
                </div>
                <div class="card-body">

                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="tableData" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline dataTable-wrapper" style="width: 1573px;">
                                    <thead>
                                    <tr >
                                        <th>SN
                                        </th>
                                        <th>Candidate Name
                                        </th>
                                        <th>Candidate Email
                                        </th>

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
        await candidateList();
    })();

    async function candidateList() {

        await axios.get('/candidate-list')
            .then(function (response) {
// Destroy existing DataTable instance
                $('#tableData').DataTable().destroy();
                // Handle the successful response
                $('#tableList').empty();
                response.data['data'].forEach(function (item, i) {
                    let foreach = ` <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">${i + 1}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">${item['name']}</td>
                                            <td>${item['email']}</td>
                                            <td><div class="d-flex gap-2"><button data-id=${item['id']} class="btn btn-lg editbtn"><i class="fas fa-edit"></i></button>
                                            <button  data-id=${item['id']} class="btn  deletebtn btn-lg"><i class="fas fa-trash-alt"></i></button></div></td>

                                        </tr>`

                    $('#tableList').append(foreach)

                    // <button class="btn btn-outline-primary"> </button>
                })

                $('.editbtn').on('click', async function () {
                    let id = $(this).data('id');
                    $('#updateID').val(id);
                    $('#update-modal').modal('show');

                    await fillCandidateData()

                })

                $('.deletebtn').on('click', async function () {
                    let id = $(this).data('id');
                    $('#deleteID').val(id);
                    $('#delete-modal').modal('show');


                })


                $('#tableData').dataTable({
                    order:[[0,'asc']],
                    pagingType:'numbers'
                });
            })
            .catch(function (error) {
                // Handle errors
                console.error('Error:', error);
            });


    }
</script>
