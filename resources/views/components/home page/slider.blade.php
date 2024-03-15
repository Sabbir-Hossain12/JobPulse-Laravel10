<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center"
             data-background="https://images.pexels.com/photos/3756678/pexels-photo-3756678.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="text-black hero__caption" >
                            <h1 class="text-black">Let Your Career Story Begins Here</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form class="search-box">
                            <div class="input-form">
                                <input id="searchTitle" type="text" placeholder="Job Tittle or keyword">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select id="select1">
                                        <option value="">Location BD</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="#" id="findJobAnchor" tabindex="0">Find job</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<script>


    document.getElementById('findJobAnchor').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default link behavior

        // Your custom logic goes here

        // For example, redirect to the search result page


        let searchTitle = $('#searchTitle').val()

        if (searchTitle.length === 0) {
            errorToast('Title Required')
        } else {

            window.location.href = `/job-search-result?title=${searchTitle}`;
        }
    });

</script>
