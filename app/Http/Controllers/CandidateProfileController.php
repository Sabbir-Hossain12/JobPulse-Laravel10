<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CandidateProfile;
use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateProfileController extends Controller
{
    public function show($id)
    {
        // For employers to view candidate profiles
        // Check if the current user is an employer
        if (!Auth::guard('employer')->check()) {
            abort(403, 'Unauthorized access');
        }

        $employerId = Auth::guard('employer')->id();

        // Check if the candidate has applied to any of the employer's jobs
        $hasApplied = Application::where('candidate_id', $id)
            ->whereHas('job', function($query) use ($employerId) {
                $query->where('employer_id', $employerId);
            })
            ->exists();

        if (!$hasApplied) {
            abort(403, 'Unauthorized access. Candidate has not applied to your jobs.');
        }

        $candidate = User::with(['candidateProfile' => function($query) {
            $query->select('id', 'user_id', 'img', 'contact_number', 'address', 'portfolio_url', 'linkedin_url', 'edu_info_id');
        }])->findOrFail($id);

        // You can expand this to show more detailed candidate information
        $profile = $candidate->candidateProfile ?? null;

        return view('candidate.pages.candidate-profile', compact('candidate', 'profile', 'id'));
    }
}