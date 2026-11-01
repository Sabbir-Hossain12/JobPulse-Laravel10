<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CandidateProfile extends Model
{
    use HasFactory;

    protected $fillable=['img','contact_number','address','portfolio_url','linkedin_url','edu_info_id'];

    function educations():HasMany
    {
        return $this->hasMany(Education::class);
    }

    function experiences():HasMany
    {
        return $this->hasMany(Experience::class);
    }

    function trainings():HasMany
    {
        return $this->hasMany(Training::class);
    }

    function skills():BelongsToMany
    {
        return $this->belongsToMany(Skill::class,'candidate_profile_skills');
    }


    function applications():HasMany
    {
        return $this->hasMany(Application::class);
    }
}
