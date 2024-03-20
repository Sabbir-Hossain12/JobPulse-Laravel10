<?php

namespace App\Http\Controllers;

use App\helper\responseHelper;
use App\Models\Employer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{


    function employerCount(Request $request):JsonResponse
    {
    $activeCount=Employer::where('status','1')->count();
    $inactiveCount=Employer::where('status','0')->count();

    $data=[
        'activeCount'=>$activeCount,
        'inactiveCount'=>$inactiveCount
    ];

        return responseHelper::out('success', $data, 200);}
}
