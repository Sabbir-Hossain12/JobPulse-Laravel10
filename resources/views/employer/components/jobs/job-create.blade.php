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
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Select Tags</label>
                                    <select class="" id="tags" multiple>
                                        <option>PHP</option>
                                        <option>Laravel</option>
                                        <option>VueJS</option>
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

                        <div><button type="submit" id="submit" class="text-center btn btn-primary">Post Job</button></div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>



<script>

    new MultiSelectTag('tags')
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

    document.querySelector('#submit').addEventListener('click', () => {


    const editorData = jDes.getData();
    const editorData2 = jRes.getData();
    const editorData3 = jReq.getData();
    let tags = $('#tags').val();

        console.log(editorData)

        console.log(editorData2)
        console.log(editorData3)
      });

</script>
