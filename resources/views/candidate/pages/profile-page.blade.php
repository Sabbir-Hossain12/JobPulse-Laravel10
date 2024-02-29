@extends('layouts.sidenav')

@section('include_content')

    @include('candidate.components.topbar')

    @include('candidate.components.sidebar')
@endsection

@section('content')

    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic information</h4>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">


                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact Number</label>
                                        <input class="form-control" type="text" placeholder="EX: Laravel Developer"
                                               id="contact">
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input class="form-control" type="text" placeholder="Ex: Uttara,Dhaka"
                                               id="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="linkUrl" class="form-label">LinkedIn URL</label>
                                        <input class="form-control" type="url" placeholder="Ex: 15000-20000tk"
                                               id="linkUrl">
                                    </div>
                                    <div class="mb-3">
                                        <label for="portUrl" class="form-label">Portfolio URL</label>
                                        <input class="form-control" type="url" placeholder="Ex: 15000-20000tk"
                                               id="portUrl">
                                    </div>
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Select Skills</label>
                                        <select class="form-select" id="skills">

                                            <option>1</option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>


                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Educational information</h4>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">
                        @for($i=0;$i<3;$i++)
                            <div class="row py-3">
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="degreeType" class="form-label">Degree type {{$i+1}}</label>
                                            <select class="form-select" id="degreeType_{{$i}}">
                                                <option>SSC</option>
                                                <option>HSC</option>
                                                <option>University</option>

                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="school" class="form-label">School/University Name</label>
                                            <input class="form-control" type="text"
                                                   placeholder="EX: North South University"
                                                   id="school_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div class="mb-3">
                                            <label for="major" class="form-label">Group/Major</label>
                                            <input class="form-control" type="text" placeholder="EX: Computer Science"
                                                   id="major_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div class="mb-3">
                                            <label for="passYear" class="form-label">Passing Year</label>
                                            <input class="form-control" type="text" placeholder="EX: 2022"
                                                   id="passYear_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div class="mb-3">
                                            <label for="gpa" class="form-label">GPA/CGPA</label>
                                            <input class="form-control" type="text" placeholder="EX: 5.00"
                                                   id="gpa_{{$i}}">
                                        </div>


                                    </div>
                                </div>

                            </div>
                        @endfor
                    </div>

                    <div>
                        <button onclick="profileSubmit()" type="button" id="submit" class="text-center btn btn-primary">Update
                            Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->


    <script>new MultiSelectTag('tags') </script>




        <script>

            async function profileSubmit()
            {
                const educationInfo = [];

                let contact= $('#contact').val();
                let address= $('#address').val();
                let link= $('#linkUrl').val();
                let port= $('#portUrl').val();

                for (let i = 0; i < 3; i++) {
                    const degreeType = document.getElementById(`degreeType_${i}`).value;
                    const schoolName = document.getElementById(`school_${i}`).value;
                    const major = document.getElementById(`major_${i}`).value;
                    const passingYear = document.getElementById(`passYear_${i}`).value;
                    const gpa = document.getElementById(`gpa_${i}`).value;

                    educationInfo.push({
                        degree_type: degreeType,
                        school_name: schoolName,
                        major: major,
                        passing_year: passingYear,
                        gpa: gpa,
                    });
                }

                console.log(educationInfo)
            }



                // console.log($('#degreeType_0').val())
                // console.log($('#degreeType_1').val())
                // console.log($('#degreeType_2').val())

        </script>

@endsection
