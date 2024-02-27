<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobTag extends Model
{
    use HasFactory;


    public function jobs():BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_tag_relation', 'job_tag_id', 'job_id');
    }

}
