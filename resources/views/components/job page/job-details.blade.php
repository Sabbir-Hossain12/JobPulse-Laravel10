<section>
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="p-0 single-job-items mb-50">
                        <div class="job-items">
                            {{--                            <div class="company-img company-img-details">--}}
                            {{--                                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>--}}
                            {{--                            </div>--}}
                            <div class="job-tittle">
                                <a href="#">
                                    <h4 id="job_title">Digital Marketer</h4>
                                </a>
                                <ul>
                                    <li class="job_company">Creative Agency</li>
                                    <li id="job_location"><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li id="job_salary">$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <div id="job_des">
                                <p>It is a long established fact that a reader will beff distracted by vbthe creadable
                                    content of a page when looking at its layout. The pointf of using Lorem Ipsum is
                                    that it has ahf mcore or-lgess normal distribution of letters, as opposed to using,
                                    Content here content here making it look like readable.</p>
                            </div>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Responsibilities</h4>
                            </div>
                            <div id="job_res">
                            <ul>
                                <li>System Software Development</li>
                                <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                                <li>Research and code , libraries, APIs and frameworks</li>
                                <li>Strong knowledge on software development life cycle</li>
                                <li>Strong problem solving and debugging skills</li>
                            </ul>
                            </div>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Requirement</h4>
                            </div>
                            <div id="job_req">
                            <ul>
                                <li>3 or more years of professional design experience</li>
                                <li>Direct response email experience</li>
                                <li>Ecommerce website design experience</li>
                                <li>Familiarity with mobile and web apps preferred</li>
                                <li>Experience using Invision a plus</li>
                            </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span id="posted_date">12 Aug 2019</span></li>
                            <li>Location : <span id="location">New York</span></li>
{{--                            <li>Vacancy : <span>02</span></li>--}}
{{--                            <li>Job nature : <span>Full time</span></li>--}}
                            <li>Salary : <span id="salary"></span></li>
                            <li>Deadline : <span id="deadline">12 Sep 2020</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <button  class="btn" id="apply">Apply Now</button>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span class="job_company">Colorlib</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                        <ul>
                            <li>Name: <span class="job_company">Colorlib </span></li>
{{--                            <li>Web : <span> colorlib.com</span></li>--}}
                            <li>Email: <span id="company_email">carrier.colorlib@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--Modal--}}
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
                        <button type="button" id="delete-modal-close" class="btn  mx-2" data-dismiss="modal">Cancel</button>
                        <button onclick="jobApply()" type="button" id="confirmDelete" class="btn btn-outline-success mx-2" >Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

    let para = new URLSearchParams(window.location.search)
    let id = para.get('id');


    (async () => {

        await jobDetails()
    })()

    async function jobDetails() {
        let res = await axios.get(`/job-details/${id}`);

        let item = res.data['data'];

        if (res.data['message'] === 'success') {
            $('#job_title').text(item['title']);
            $('.job_company').text(item['employer']['name'])
            $('#job_location').text(item['location']);
            $('#job_salary').text(item['salary_range']);
            $('#job_des').html(item['description']);
            $('#job_res').html(item['responsibilities']);
            $('#job_req').html(item['requirement']);

            $('#posted_date').text(item['formatted_created_at']);
            $('#location').text(item['location'])
            $('#salary').text(item['salary_range']);
            $('#deadline').text(item['formatted_deadline']);

            $('#company_email').text(item['employer']['email'])

            $('#applyID').val(id)

        }

        $('#apply').on('click',function ()
        {
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
