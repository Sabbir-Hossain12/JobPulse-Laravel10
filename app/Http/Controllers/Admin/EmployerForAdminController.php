<?php

namespace App\Http\Controllers\Admin;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\EmployerDetail;
use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerForAdminController extends Controller
{

    function employerList()
    {
       $data= Employer::all();

       return responseHelper::out('success',$data,200);
    }

    function employerByid(Request $request)
    {
       $data= Employer::where('id',$request->id)->first();

        return $data;
    }

    function employerDetailsByid(Request $request)
    {
        $data=EmployerDetail::where('employer_id',$request->id)->first();

        return $data;
    }


    function employerDetailsAdd(Request $request)
    {
       EmployerDetail::where('id',$request->id)->create($request->input());

    }

    function employerRemoveByid(Request $request)
    {
      $countE=  Employer::where('id',$request->id)->count();
      $countED=  EmployerDetail::where('employer_id',$request->id)->count();

        if($countED && $countE)
        {
             EmployerDetail::where('employer_id',$request->id)->delete();
             Employer::where('id',$request->id)->delete();

            return responseHelper::out('success','',200);
        }
        else
        {
            return responseHelper::out('failed','',400);
        }

    }




}
