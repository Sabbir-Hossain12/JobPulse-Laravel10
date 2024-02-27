<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTagRelation extends Model
{
    use HasFactory;

    protected $table = 'job_tag_relations';

    public $timestamps = false;
}
