<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Jobs for publish</h4>
                    <p class="card-title-desc"></p>
                </div>
                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Job Title</label>
                                    <input class="form-control" type="text" placeholder="EX: Laravel Developer"
                                           id="jTitle">
                                </div>

                                <div class="mb-3">
                                    <label for="example-email-input" class="form-label">Job Location</label>
                                    <input class="form-control" type="email" placeholder="Ex: Uttara,Dhaka"
                                           id="jLocation">
                                </div>
                                <div class="mb-3">
                                    <label for="example-url-input" class="form-label">Salary Range</label>
                                    <input class="form-control" type="text" placeholder="Ex: 15000-20000tk"
                                           id="jSalary">
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label for="example-date-input" class="form-label">Deadline</label>
                                    <input class="form-control" type="date" value="2019-08-19" id="jDead">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Select Category</label>
                                    <select class="form-select" id="jCat">


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tags" class="form-label">Select Tags</label>
                                    <select class="form-select" id="tags" multiple>
{{--                                        <option value="1">Afghanistan</option>--}}

                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my-3">
                                <label for="jDes" class="form-label">Description</label>
                                <textarea id="jDes" rows="10" cols="80"></textarea>
                            </div>
                            <div class="my-3">
                                <label for="jRes" class="form-label">Job Responsibilities</label>
                                <textarea id="jRes" rows="10" cols="80"></textarea>
                            </div>
                            <div class="my-3">
                                <label for="jReq" class="form-label">Job Requirement</label>
                                <textarea id="jReq" rows="10" cols="80"></textarea>
                            </div>


                        </div>

                        <div><button onclick="jobSubmit()" type="submit" id="submit" class="text-center btn btn-primary">Post Job</button></div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>



<script>

    (async ()=>{
        await  tagDropdown()
        new MultiSelectTag('tags')
       await categoryDropdown()

    })();


    let jDes;
    let jRes;
    let jReq;
    ClassicEditor
        .create(document.querySelector('#jDes'))
        .then(newEditor => {
            jDes = newEditor;
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#jRes'))
        .then(newEditor => {
            jRes = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#jReq'))
        .then(newEditor => {
            jReq = newEditor;
        })
        .catch(error => {
            console.error(error);
        });

   // document.querySelector('#submit').addEventListener('click', () => {

   async function jobSubmit() {




       let title= $('#jTitle').val();
       let location= $('#jLocation').val();
       let salary= $('#jSalary').val();
       let deadline= $('#jDead').val();
       let category= $('#jCat').val();
       let tags= $('#tags').val();
       let des = jDes.getData();
       let resp = jRes.getData();
       let req = jReq.getData();

       let obj={
           'title':title,
           'location':location,
           'salary_range':salary,
           'deadline':deadline,
           'category_id':category,
           'description':des,
           'responsibilities':resp,
           'requirement':req,
           'tags':tags


       }

      console.log(title, location, salary, deadline, category,tags,des,resp,req)

       let res= await axios.post('/job-store',obj);
       if(res.data['message']==='success')
       {
           successToast('Job Created')
       }
       else
       {
           errorToast('Error')
       }
   }



   async function categoryDropdown()
   {
        let res= await axios.get('/job-category-list');

        $('#jCat').empty();
        res.data['data'].forEach(function(item,i)
        {
            let each=` <option value="${item['id']}">${item['name']}</option>`
            $('#jCat').append(each)
        })

   }

    async function tagDropdown()
    {
        let res2= await axios.get('/job-tag-list');

      //  $('#tags').empty();
        res2.data['data'].forEach(function(item,i)
        {
            let each2=` <option value="${item['id']}">${item['name']}</option>`
            $('#tags').append(each2)
        })

    }


</script>
