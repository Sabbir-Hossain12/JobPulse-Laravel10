<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Employee (ADMINS)</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">


                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="candidateName">

                                <label class="form-label mt-2">Email</label>
                                <input type="text" class="form-control" id="candidateEmail">

                                {{--                                <label class="form-label mt-2">Role</label>--}}
                                {{--                                <select type="text" class="form-control form-select" id="employerRole">--}}

                                {{--                                </select>--}}
{{--                                <label class="form-label mt-2">Role</label>--}}
{{--                                <select type="text" class="form-control form-select" id="employeeRole">--}}

{{--                                </select>--}}


                                <input type="text" class="d-none" id="updateID">


                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn btn-outline-warning" data-bs-dismiss="modal"
                        aria-label="Close">Close
                </button>
                <button onclick="updateCandidateData()" id="update-btn" class="btn btn-outline-primary">Update</button>
            </div>

        </div>
    </div>
</div>


<script>



    async function fillCandidateData() {
        let id = $('#updateID').val();
        if (id.length === 0) {
            errorToast('id required !')

        } else {
            await axios.get(`/candidate-id/${id}`).then(async function (res) {


                $('#candidateName').val(res.data['data']['name'])
                $('#candidateEmail').val(res.data['data']['email'])


            }).catch(function (error) {
                console.log(error)
            })


        }
    }

    async function updateCandidateData() {
        let id = $('#updateID').val();
        let name = $('#candidateName').val();
        let email = $('#candidateEmail').val();


        console.log(id,name,email);
        let obj =

            {
                "name": name,
                "email": email
            }


        let res = await axios.post(`/candidate-update/${id}`,obj)
        if(res.data['message']==='success')
        {
            successToast('Candidate Updated')
            await candidateList();
            $('#update-modal-close').click();
        }
        else
        {
            errorToast('Invalid value');
        }


    }


</script>
