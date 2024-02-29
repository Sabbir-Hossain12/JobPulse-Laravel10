<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class JobforCandidateController extends Controller
{
    function profileStore(Request $request)
    {

         CandidateProfile::createOrUpdate([


             'contact_number'=> $request->input('contact'),
             'address'=> $request->input('contact'),

             'edu_info_id'=> $request->input('edu_info'),


         ]);
    }
}
