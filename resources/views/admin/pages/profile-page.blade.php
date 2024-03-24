@extends('layouts.sidenav')
@section('include_content')

    @include('admin.components.topbar')

    @include('admin.components.sidebar')
@endsection
@section('content')


<div class="container-fluid">


    <div class="row">

        <div class="col-lg-6">
            <div>
                <div class="mb-3">
                    <label for="example-text-input" class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="EX: Admin"
                           id="jTitle">
                </div>

                <div class="mb-3">
                    <label for="example-email-input" class="form-label">Email</label>
                    <input class="form-control" type="email" placeholder="Ex: admin@admin.com"
                           id="jLocation">
                </div>
                <div class="mb-3">
                    <label for="example-url-input" class="form-label">Password</label>
                    <input class="form-control" type="password" placeholder="Ex: minimum 8 characters"
                           id="jSalary">
                </div>
                <div class="mb-3">
                    <label for="example-url-input" class="form-label">Confirm password</label>
                    <input class="form-control" type="password" placeholder="Ex: minimum 8 characters"
                           id="jSalary">
                </div>

                <div class="mt-4">
                    <button type="button" class="btn btn-primary">Update Profile</button>
                </div>


            </div>
        </div>


    </div>

</div>

<script>


    async function readProfile () {


        let res=await fetch('/admin/profile')
        let data=await res.json()
        console.log(data)

    }

</script>





@endsection
