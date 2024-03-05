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
                                    <li id="job_company">Creative Agency</li>
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
                            <li>Vacancy : <span>02</span></li>
                            <li>Job nature : <span>Full time</span></li>
                            <li>Salary : <span>$7,800 yearly</span></li>
                            <li>Application date : <span>12 Sep 2020</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span>Colorlib</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout.</p>
                        <ul>
                            <li>Name: <span>Colorlib </span></li>
                            <li>Web : <span> colorlib.com</span></li>
                            <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                        </ul>
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
            $('#job_company').text(item['employer']['name'])
            $('#job_location').text(item['location']);
            $('#job_salary').text(item['salary_range']);
            $('#job_des').html(item['description']);
            $('#job_res').html(item['responsibilities']);
            $('#job_req').html(item['requirement']);

        }


    }
</script>
