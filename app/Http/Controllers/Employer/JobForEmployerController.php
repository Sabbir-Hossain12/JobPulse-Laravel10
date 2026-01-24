<?php

namespace App\Http\Controllers\Employer;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class JobForEmployerController extends Controller
{
    function jobList()
    {
        $data = Job::where('employer_id', Auth::guard('employer')->id())
                   ->with(['employer:id,name', 'category', 'applications'])
                   ->get();

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
        $data = JobCategory::with('jobs')->withCount('jobs')->orderBy('jobs_count','desc')->get();

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

    function jobApplications(Request $request)
    {
        try {
            $job = Job::where('id', $request->id)
                      ->where('employer_id', Auth::guard('employer')->id())
                      ->with(['applications' => function($query) {
                          $query->with(['candidate:id,name,email']);
                      }])
                      ->first();

            if (!$job) {
                return responseHelper::out('Job not found or unauthorized', null, 404);
            }

            // Format the application dates
            foreach ($job->applications as $application) {
                $formattedCreatedAt = \Carbon\Carbon::parse($application->created_at)->format('d M Y');
                $application->formatted_applied_at = $formattedCreatedAt;
            }

            return responseHelper::out('success', $job->applications, 200);
        } catch (\Exception $e) {
            \Log::error('Job Applications Error: ' . $e->getMessage());
            return responseHelper::out('error', [], 500);
        }
    }

    function employerApplications()
    {
        try {
            $employerId = Auth::guard('employer')->id();

            $applications = Application::whereHas('job', function($query) use ($employerId) {
                $query->where('employer_id', $employerId);
            })
            ->with(['job:id,title', 'candidate:id,name,email'])
            ->get();

            // Format the application dates
            foreach ($applications as $application) {
                $formattedCreatedAt = \Carbon\Carbon::parse($application->created_at)->format('d M Y');
                $application->formatted_applied_at = $formattedCreatedAt;
            }

            return responseHelper::out('success', $applications, 200);
        } catch (\Exception $e) {
            \Log::error('Employer Applications Error: ' . $e->getMessage());
            return responseHelper::out('error', [], 500);
        }
    }


}
