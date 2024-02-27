<?php

namespace App\Http\Controllers\Employer;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobForEmployerController extends Controller
{
    function jobList()
    {
      $data=  Job::with(['employer','category'])->get();

      return responseHelper::out('success',$data,200);

    }

    function jobByID(Request $request)
    {
        $data= Job::where('id',$request->id)->first();

        return responseHelper::out('success',$data,200);
    }

    function jobRemove(Request $request)
    {
        Job::where('id',$request->id)->delete();

        return responseHelper::out('success',$data,200);
    }



    function jobStore(Request $request)
    {
        
    }

}
