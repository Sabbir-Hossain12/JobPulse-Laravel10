{{--Recent Jobs--}}

<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">

                <h2 class="mb-4 display-5 text-center">Recent Jobs</h2>
                <p class="fs-5 text-secondary mb-5 text-center">Our clients are our top priority, and we are committed
                    to providing them with the highest level of service.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row " id="jobCategoryList">


        </div>

        <div class="row" id="jobList">





        </div>

        <div class="text-center"><button class="btn btn-outline-warning btn-lg" id="viewMoreBtn">View More</button></div>
    </div>

</section>
<script>

    (async () => {
        await JobCategoryList()
       await jobList()
    })()

    async function JobCategoryList() {

        let res = await axios.get('/job-category-list')


        $('#jobCategoryList').empty()
        res.data['data'].forEach(function (item, i) {
            let forEach = `  <div class="col-3">
                <div class="card">

                    <div class="card-body">

                  <div class="card-text"> ${item['name']} </div>
                    </div>
                </div>
            </div>`

            $('#jobCategoryList').append(forEach);

        })

    }

    // Function to toggle visibility of job cards
    function toggleJobCards() {
        $('#jobList .card').slice(0, visibleCard).show();
        //$('#jobList .card').slice(visibleCard).hide();
    }

    let visibleCard=2;
    async function jobList()
    {

        let res= await axios.get('/job-list')

        $('#jobList').empty()
        res.data['data'].slice(0,visibleCard).forEach(function (item, i) {
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
                            <div>
                <div> <button class="btn btn-outline-primary" >Apply </button>
                    </div>
                </div>
            </div> `

            $('#jobList').append(forEach);

        })

        toggleJobCards();



            $('#viewMoreBtn').show(); // Show the button if there are more job cards




    }
    $('#viewMoreBtn').click( async function () {
        // Increase the visible job card count
        visibleCard = 5;

        // Toggle visibility of job cards
        toggleJobCards();
        await jobList()
        // Check if there are more job cards to show
        if (visibleCard >= $('#jobList .card').length) {
            $('#viewMoreBtn').hide(); // Hide the button if all job cards are visible
        }
    });





</script>
