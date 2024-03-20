@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')

    <div class="row gap-4">

        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Active Companies
                    </h5>
                    <p class="card-text" id="activeC"></p>
                </div>

            </div>

        </div>
        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Pending Companies
                    </h5>
                    <p class="card-text" id="pendingC"></p>
                </div>

            </div>

        </div>
        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Jobs
                    </h5>
                    <p class="card-text" id="jobs"></p>
                </div>

            </div>

        </div>
        <div class="col-lg-2 ">

            <div class="card w-100">

                <div class="card-body">
                    <h5 class="card-title">
                        Candidates
                    </h5>
                    <p class="card-text" id="candidates"></p>
                </div>

            </div>

        </div>

    </div>



    <script>

        (async ()=>
        {
           await dashboardCount()
        })();

        async function dashboardCount() {
            let res = await axios.get('/employer-count');

            let res1 = await axios.get('/job-list-all');
            let res2 = await axios.get('/candidate-list');


           $('#pendingC').text(res.data.data['inactiveCount']);
            $('#activeC').text(res.data.data['activeCount']);
            $('#jobs').text(res1.data.data.length);
            $('#candidates').text(res2.data.data.length);


        }


    </script>

@endsection
