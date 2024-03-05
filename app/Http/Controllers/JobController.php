<?php

namespace App\Http\Controllers;

use App\helper\responseHelper;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function jobDetailsByID(Request $request)
    {
        $data= Job::where('id',$request->id)->with(['employer','category','applications'])->first();

        return responseHelper::out('success',$data,200);
    }
}
