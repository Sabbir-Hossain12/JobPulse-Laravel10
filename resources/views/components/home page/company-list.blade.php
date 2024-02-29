<!-- Client 2 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8 vh-100">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h3 class="fs-6 text-secondary mb-2 text-uppercase text-center">Our Clients</h3>
                <h2 class="mb-4 display-5 text-center">Trusted by over 786+ Companies.</h2>
                <p class="fs-5 text-secondary mb-5 text-center">Our clients are our top priority, and we are committed to providing them with the highest level of service.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-4" id="employerList">



            </div>
        </div>
</section>


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
                    let foreach = ` <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">

                    <span class="h2 fw-bold">${item['name']}</span>

                </div>
            </div>  `

                    $('#employerList').append(foreach)

                    // <button class="btn btn-outline-primary"> </button>
                })


            }).catch( function (error)
            {
            console.log(error)

            })


    }





</script>
