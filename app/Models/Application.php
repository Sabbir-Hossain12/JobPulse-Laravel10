<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    use HasFactory;
protected $fillable=['job_id','candidate_id'];

    function candidate():BelongsTo
    {
        return  $this->belongsTo(User::class,'candidate_id','id');
    }
    function job():BelongsTo
    {
        return  $this->belongsTo(User::class,'job_id','id');
    }
}
