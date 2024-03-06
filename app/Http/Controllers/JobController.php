<?php

namespace App\Http\Controllers;

use App\helper\responseHelper;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function jobDetailsByID(Request $request)
    {
        $data= Job::where('id',$request->id)->with(['employer','category','applications'])->first();

        if ($data) {
            // Convert created_at timestamp to a formatted date using Carbon
            $formattedCreatedAt = Carbon::parse($data->created_at)->format('d M Y');
            $formattedDeadline = Carbon::parse($data->deadline)->format('d M Y');
            // Add the formatted created_at date to the data
            $data->formatted_created_at = $formattedCreatedAt;
            $data->formatted_deadline= $formattedDeadline;

            // Return the response with the modified data
            return responseHelper::out('success', $data, 200);
        } else {
            // Handle the case where the job data is not found
            return responseHelper::out('error', 'Job not found', 404);
        }
    }

    function jobSearch(Request $request)
    {
       $data= Job::where('title','LIKE','%'.$request->title.'%')->with(['employer','category','applications'])->get();

       if($data)
       {
           return responseHelper::out('success',$data,200);
       }
       else
       {
           return responseHelper::out('failed','',404);

       }
    }

    function jobListByCompany(Request $request)
    {
        $data= Job::where('employer_id',$request->id)->with(['employer','category','applications'])->get();

        if($data)
        {
            return responseHelper::out('success',$data,200);
        }
        else
        {
            return responseHelper::out('failed','',404);

        }
    }

    function jobListByCategory(Request $request)
    {
        $data= Job::where('category_id',$request->id)->with(['employer','category','applications'])->get();

        if($data)
        {
            return responseHelper::out('success',$data,200);
        }
        else
        {
            return responseHelper::out('failed','',404);

        }
    }
}
