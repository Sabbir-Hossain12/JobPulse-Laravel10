<?php

namespace App\Http\Controllers\Employer;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobForEmployerController extends Controller
{
    function jobList()
    {
        $data = Job::with(['employer', 'category'])->get();

        return responseHelper::out('success', $data, 200);

    }

    function jobByID(Request $request)
    {
        $data = Job::where('id', $request->id)->first();

        return responseHelper::out('success', $data, 200);
    }

    function jobRemove(Request $request)
    {
        Job::where('id', $request->id)->delete();

        return responseHelper::out('success', $data, 200);
    }

    function jobCategoryList()
    {
        $data = JobCategory::get();

        return responseHelper::out('success', $data, 200);
    }

    function jobTagsList()
    {
        $data = JobTag::get();
        return responseHelper::out('success', $data, 200);
    }


    function jobStore(Request $request)
    {
//        $request->validate([
//            'title' => 'string',
//            'description' => 'text',
//            'responsibilities', 'requirement', 'location ',
//            'salary_range', 'deadline', 'employer_id ', 'category_id',
//        ]);

    $job=  Job::create([
            'title'=> $request->input('title'),
            'location'=> $request->input('location'),
            'salary_range'=> $request->input('salary_range'),
            'deadline'=> $request->input('deadline'),
            'category_id'=> $request->input('category_id'),
            'description'=> $request->input('description'),
            'responsibilities'=> $request->input('responsibilities'),
            'requirement'=> $request->input('requirement'),
            'employer_id'=> Auth::guard('employer')->id()


        ]);

        $job->jobTags()->attach($request->input('tags'));

        return responseHelper::out('success','',201);
    }

    function JobCountByCategory(Request $request)
    {
        Job::where('category_id',$request->input('cat_id'))->count();
    }


}
