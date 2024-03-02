@extends('layouts.home')



@section('content')

    @include('components.home page.header')


    {{--Recent Jobs--}}

    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">

                    <h2 class="mb-4 display-5 text-center">Find Jobs</h2>
                    <p class="fs-5 text-secondary mb-5 text-center">Our clients are our top priority, and we are committed
                        to providing them with the highest level of service.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">


            <div class="row" id="jobList">





            </div>

            <div class="text-center"><button class="btn btn-outline-warning btn-lg" id="viewMoreBtn">View More</button></div>
        </div>

    </section>

{{--Apply Confirmation Modal--}}
    <section>
    <div class="modal animated zoomIn" id="apply-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class=" mt-3 text-warning">Apply ?</h3>
                    <p class="mb-3">This Action Cannot be undone !</p>
                    <input class="" id="applyID"/>
                </div>
                <div class="modal-footer justify-content-end">
                    <div>
                        <button type="button" id="delete-modal-close" class="btn btn-outline-warning mx-2 " data-bs-dismiss="modal">Cancel</button>
                        <button onclick="jobApply()" type="button" id="confirmDelete" class="btn btn-outline-success mx-2" >Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script>

        (async () => {

            await jobList()
        })()






        async function jobList()
        {

            let res= await axios.get('/job-list')

            $('#jobList').empty()
            res.data['data'].forEach(function (item, i) {
                let forEach = `<div class="col-12 pt-2">

                <div class="card border">
                    <div class="card-header bg-transparent d-flex justify-content-between bg-soft-success">
                        <h5 class="my-0 text-dark"> <i class="fas fa-briefcase"></i> ${item['title']}</h5>
                        <p class="my-0 text-dark fw-bold">${item['salary_range']}</p>

                    </div>
                    <div class="card-body d-flex justify-content-between">
                                <div>
                        <h5 class="card-title"><i class="fas fa-location-arrow"></i> ${item['location']}</h5>
                        <p class="card-text">tags,tags,tags</p>
                            </div>
                <div> <button data-id=${item['id']} class="btn apply btn-outline-primary btn-lg" >Apply </button>
                    </div>
                </div>
            </div> `

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
                            }
                            else
                            {
                                errorToast(res.data['message']);
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



    @include('components.home page.footer')


@endsection
