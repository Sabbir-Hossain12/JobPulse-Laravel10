<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $fillable=['title','location','salary_range','deadline','category_id','description','responsibilities','requirement','employer_id','posted_at'];

    function employer():BelongsTo
    {
        return $this->belongsTo(Employer::class,'employer_id','id');
    }
    function category():BelongsTo
    {
        return $this->belongsTo(JobCategory::class,'category_id','id');
    }
    public function jobTags():BelongsToMany
    {
        return $this->belongsToMany(JobTag::class,'job_tag_relations','job_id','tag_id');
    }


}
