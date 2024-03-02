<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CandidateProfile extends Model
{
    use HasFactory;

    protected $fillable=['img','contact_number','address','portfolio_url','linkedin_url','edu_info_id'];

    function educationalInformations():BelongsTo
    {
        return $this->belongsTo(EducationalInformation::class,'edu_info_id','id');
    }

    function applications():HasMany
    {
        return $this->hasMany(Application::class);
    }
}
