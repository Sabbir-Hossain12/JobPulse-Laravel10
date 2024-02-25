<?php

namespace App\Http\Controllers\Admin;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\EmployerDetail;
use Illuminate\Http\Request;
use App\Models\Employer;
use Illuminate\Support\Facades\Hash;

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

       if($data)
       {

        return responseHelper::out('success',$data,200);
       }
       else
       {
           return responseHelper::out('failed',null,404);
       }

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
      //$countED=  EmployerDetail::where('employer_id',$request->id)->count();

        if($countE)
        {
            // EmployerDetail::where('employer_id',$request->id)->delete();
             Employer::where('id',$request->id)->delete();

            return responseHelper::out('success','',200);
        }
        else
        {
            return responseHelper::out('failed','',400);
        }

    }

    function statusList()
    {
        $data=[Employer::STATUS_ACTIVE,Employer::STATUS_INACTIVE];


        return responseHelper::out('success',$data,200);
    }

    function changeEmployeeStatus(Request $request)
    {
        Employer::where('id',$request->id)->update('status',$request->input('status'));
    }

    function employerUpdateById(Request $request)
    {
        Employer:: where('id',$request->id)->update([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'status'=>$request->input('status')
        ]);

        return responseHelper::out('success',null,200);
    }




}
