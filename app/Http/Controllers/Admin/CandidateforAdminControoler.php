<?php

namespace App\Http\Controllers\Admin;

use App\helper\responseHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CandidateforAdminControoler extends Controller
{
   function candidateList()
   {
     $data =User::get();

       return responseHelper::out('success',$data,200);
   }

   function candidateRemove(Request $request)
   {
       User::where('id',$request->id)->delete();

       return responseHelper::out('success','',200);
   }

   function candidateById(Request $request)
   {
    $data=   User::where('id',$request->id)->first();

       return responseHelper::out('success',$data,200);

   }

   function candidateUpdate(Request $request)
   {
       try {

    $data=  User::where('id',$request->id)->update($request->input());
           return responseHelper::out('success',$data,200);
       }
       catch (\Exception $exception)
       {
           return responseHelper::out('failed','',200);
       }

   }

//   function
}
