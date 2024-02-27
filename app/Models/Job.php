<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;


    function employer():BelongsTo
    {
        return $this->belongsTo(Employer::class,'employer_id','id');
    }
    function category():BelongsTo
    {
        return $this->belongsTo(JobCategory::class,'category_id','id');
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(JobTag::class, 'job_tag_relation', 'job_id', 'job_tag_id');
    }

//    function ()
//    {
//
//    }
}
