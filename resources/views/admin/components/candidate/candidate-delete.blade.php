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
                    <button type="button" id="delete-modal-close" class="btn btn-outline-warning mx-2 " data-bs-dismiss="modal">Cancel</button>
                    <button onclick="itemDelete()" type="button" id="confirmDelete" class="btn btn-outline-danger mx-2" >Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>



    async function itemDelete()
    {
        let id= $('#deleteID').val();

        if(id.length===0)
        {
            errorToast('ID Required !')
        }
        else
        {
            await axios.get(`/candidate-remove/${id}`).then( async function (res)
            {
                if(res.data['message']==='success')
                {
                    successToast('Employer Removed !')
                    await candidateList();
                    $('#delete-modal-close').click();

                }


            }).catch(function (error)
            {
                console.log(error)
            })
        }
    }


</script>
