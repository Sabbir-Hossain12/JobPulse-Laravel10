<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\JobTag;
use App\Models\JobTagRelation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTagRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = Job::get();
        $tags = JobTag::take(5)->get();

        // Seed job_tag_relations table
        foreach ($jobs as $job) {
            foreach ($tags as $tag) {
                JobTagRelation::create([
                    'job_id' => $job->id,
                    'tag_id' => $tag->id,
                ]);
            }
        }
    }
}
