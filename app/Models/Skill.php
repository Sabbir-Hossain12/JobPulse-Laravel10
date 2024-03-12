<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;



    function candidateProfiles():BelongsToMany
    {
        return $this->belongsToMany(CandidateProfile::class,'candidate_profile_skills');
    }

}
