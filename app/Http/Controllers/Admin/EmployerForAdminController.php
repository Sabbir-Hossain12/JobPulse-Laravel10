<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployerDetail;
use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerForAdminController extends Controller
{

    function employerList()
    {
       $data= Employer::all();

       return $data;
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
        Employer::where('id',$request->id)->delete();
        EmployerDetail::where('employer_id',$request->id)->delete();
    }




}
