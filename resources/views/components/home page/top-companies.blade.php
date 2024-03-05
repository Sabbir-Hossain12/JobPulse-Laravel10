<!-- Our Services Start -->
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED COMPANIES</span>
                    <h2>Browse Top Companies </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center" id="employerList">


        </div>
        <!-- More Btn -->
        <!-- Section Button -->
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->

<script>
    (async ()=>
        {
            await  employerList();
        }

    )()


    async  function employerList()
    {

        await axios.get('/employer-list')
            .then(function (response) {
                // Handle the successful response
                $('#employerList').empty();
                response.data['data'].forEach(function (item, i) {
                    let foreach = `  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
<!--                    <div class="services-ion">-->
<!--                        <span class="flaticon-tour"></span>-->
<!--                    </div>-->
                    <div class="services-cap">
                        <h5><a href="job_listing.html">${item['name']}</a></h5>
                        <span>(${item['jobs'].length})</span>
                    </div>
                </div>
            </div>`

                    $('#employerList').append(foreach)

                    // <button class="btn btn-outline-primary"> </button>
                })


            }).catch( function (error)
            {
                console.log(error)

            })


    }

</script>
