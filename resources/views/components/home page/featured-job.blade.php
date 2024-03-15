<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Recent Job</span>
                    <h2>Featured Jobs</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10" id="jobList">


            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="{{url('/jobs-page')}}" class="border-btn2">Browse All Jobs</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured_job_end -->
{{--Apply Confirmation Modal--}}
<section>
    <div class="modal animated zoomIn" id="apply-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" mt-3 text-warning">Apply ?</h3>
                    <p class="mb-3">This Action Cannot be undone !</p>
                    <input class="d-none" id="applyID"/>
                </div>
                <div class="modal-footer justify-content-end">
                    <div>
                        <button type="button" id="delete-modal-close" class="btn  mx-2" data-dismiss="modal">Cancel</button>
                        <button onclick="jobApply()" type="button" id="confirmDelete" class="btn btn-outline-success mx-2" >Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (async ()=>
    {
    await    jobList();
    })()


    async function jobList() {

        let res = await axios.get('/job-list')

        $('#jobList').empty()
        res.data['data'].data.forEach(function (item, i) {
            let forEach = `<div class="single-job-items mb-30">
                    <div class="job-items">
                        {{--<div class="company-img">--}}
                        {{--    <a href=""><img src="{{asset('assets')}}/img/icon/job-list1.png" alt=""></a>--}}
                        {{--</div>--}}
                        <div class="job-tittle">
                            <a href="/job-details?id=${item['id']}"><h4>${item['title']}</h4></a>
                            <ul>
                                <li>${item['employer']['name']}</li>
                                <li><i class="fas fa-map-marker-alt"></i>${item['location']}</li>
                                <li>${item['salary_range']}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <button data-id=${item['id']}  class="btn btn-sm apply" >Apply Now</button>
                        <span class="pt-2">Deadline: ${item[['deadline']]}</span>
                    </div>
                </div>`

            $('#jobList').append(forEach);

        })
        $('.apply').on('click',async function()
        {
            let id= $(this).data('id');
            $('#apply-modal').modal('show')

            $('#applyID').val(id);


        })


    }

    async function jobApply()
    {
        let job_id=  $('#applyID').val();

        if(job_id.length===0)
        {
            errorToast('ID required');
        }
        else
        {
            try {
                let res= await axios.post('/job-apply-submit',{job_id:job_id})
                if( res.data['message']==='success')
                {
                    successToast('Application Submitted');
                    $('#delete-modal-close').click()
                }
                else
                {
                    errorToast(res.data['message']);
                    $('#delete-modal-close').click()
                }

            }
            catch (e) {

                if(e.response.status===401)
                {
                    window.location.href='/login'
                }

            }

        }

    }
</script>
