<?php

namespace App\Http\Controllers\Admin;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Role;
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

    function adminRoleList()
    {
       $data= Role::where('role_name','!=','superadmin')->get();

        return responseHelper::out('success',$data,200);

    }

    function employeeUpdate(Request $request)
    {
        try {
            $rol_id= Role::where('role_name',$request->input('role'))->first();

          Admin::where('id',$request->id)->update([

             'name'=> $request->input('name'),
              'email'=> $request->input('email'),
              'role_id'=>$rol_id->id
          ]);
            return responseHelper::out('success','',200);
        }
        catch (\Exception $exception)
        {
            return responseHelper::out($exception->getMessage(),'',200);
        }




    }



}
