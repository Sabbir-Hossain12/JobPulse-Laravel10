<?php

namespace App\Http\Controllers\Admin;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;

class EmployeeAdminController extends Controller
{
    function employeeList()
    {
        $data= Admin::where('role_id','!=',1)->with('role')->get();

        return responseHelper::out('success',$data,200);
    }


    function employeeByID(Request $request)
    {
        $data= Admin::where('id',$request->id)->first();

        return responseHelper::out('success',$data,200);
    }
    function employeeRemoveByid(Request $request)
    {
        Admin::where('id',$request->id)->delete();

        return responseHelper::out('success','',200);
    }



}
