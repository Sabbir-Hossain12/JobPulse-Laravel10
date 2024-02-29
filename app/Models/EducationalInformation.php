<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EducationalInformation extends Model
{

    use HasFactory;

    protected  $fillable=['degree','school','major','passed_year','cgpa'];

    function candidateProfile():HasMany

    {
      return $this->hasMany(CandidateProfile::class);
    }
}
