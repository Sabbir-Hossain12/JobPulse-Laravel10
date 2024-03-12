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
                                        <label for="name" class="form-label">Candidate Name</label>
                                        <input class="form-control" type="text" placeholder="Ex: Sabbir Hossain"
                                               id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Candidate Email</label>
                                        <input class="form-control" type="email" placeholder="Ex: xyz@gmail.com"
                                               id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact Number</label>
                                        <input class="form-control" type="text" placeholder="Ex: Laravel Developer"
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
                                        <label for="tags" class="form-label">Select Skills</label>
                                        <select class="form-select" id="skills" multiple>

                                                    <option>Sabbir</option>
                                        </select>
                                    </div>





                                </div>
                            </div>


                        </div>

                    </div>


                </div>
                {{-- Education--}}
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


                </div>
                {{-- Experience--}}
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Experiences (If any)</h4>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">
                        @for($i=0;$i<3;$i++)
                            <div class="row py-3">
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="designation_{{$i}}"
                                                   class="form-label">Designation {{$i+1}}</label>
                                            <input class="form-control" type="text"
                                                   placeholder="EX: Software Engineer"
                                                   id="designation_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="company_{{$i}}" class="form-label">Institute/Company
                                                Name</label>
                                            <input class="form-control" type="text"
                                                   placeholder="EX: xyz Company"
                                                   id="company_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="joinDate_{{$i}}" class="form-label">Joining Date</label>
                                            <input class="form-control" type="date"
                                                   id="joinDate_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="departure_{{$i}}" class="form-label">Departure Date</label>
                                            <input class="form-control" type="date"
                                                   id="departure_{{$i}}">
                                        </div>


                                    </div>
                                </div>


                            </div>
                        @endfor
                    </div>


                </div>
                {{-- Training--}}
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Professional Trainings (If any)</h4>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">
                        @for($i=0;$i<3;$i++)
                            <div class="row py-3">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label for="training_{{$i}}" class="form-label">Training
                                                Name {{$i+1}}</label>
                                            <input class="form-control" type="text"
                                                   placeholder="EX: Software Engineer"
                                                   id="training_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label for="trainingCompany_{{$i}}" class="form-label">Institute/Company
                                                Name</label>
                                            <input class="form-control" type="text"
                                                   placeholder="EX: xyz Company"
                                                   id="trainingCompany_{{$i}}">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label for="completionYear_{{$i}}" class="form-label">Completion
                                                Year</label>
                                            <input class="form-control" type="text" placeholder="Ex: 2024"
                                                   id="completionYear_{{$i}}">
                                        </div>


                                    </div>
                                </div>


                            </div>
                        @endfor
                    </div>

                    <div>
                        <button onclick="profileSubmit()" type="button" id="submit" class="text-center btn btn-primary">
                            Update
                            Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->


    {{--    <script>new MultiSelectTag('tags') </script>--}}


    <script>
        new MultiSelectTag('skills')
        async function profileSubmit() {
            const educationInfo = [];

            let contact = $('#contact').val();
            let address = $('#address').val();
            let link = $('#linkUrl').val();
            let port = $('#portUrl').val();

            for (let i = 0; i < 3; i++) {


                const degreeType = document.getElementById(`degreeType_${i}`).value;
                const schoolName = document.getElementById(`school_${i}`).value;
                const major = document.getElementById(`major_${i}`).value;
                const passingYear = document.getElementById(`passYear_${i}`).value;
                const gpa = document.getElementById(`gpa_${i}`).value;

                if (degreeType.length === 0 || schoolName.length === 0 || major.length === 0 || passingYear.length === 0 || gpa.length === 0) {
                    errorToast('Please Select All fields')
                } else {

                    educationInfo.push({
                        degree_type: degreeType,
                        school_name: schoolName,
                        major: major,
                        passing_year: passingYear,
                        gpa: gpa,
                    });
                }
            }

            let res= await axios.post('/candidate-profile',{educationInfo: educationInfo,

                contact: contact,address:address,link:link,port:port})

if(res.status===201)
{
    successToast('Profile Updated !')
}
else
{
    errorToast(res.data['message'])
}

            console.log(educationInfo)
        }




    </script>

@endsection
