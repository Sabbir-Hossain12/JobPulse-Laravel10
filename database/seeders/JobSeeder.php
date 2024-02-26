<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $employer=  Employer::first();
      $category= JobCategory::first();

        Job::create([

            'title'=>'Full Stack Developer (Laravel+vue)',
            'description'=>fake()->paragraph(),
            'responsibilities'=>fake()->paragraph(),
            'requirement'=>fake()->paragraph(),
            'location'=>fake()->address(),
            'salary_range'=>'1500tk-20000tk',
            'deadline'=>fake()->date(),
            'employer_id'=>$employer->id,
            'category_id'=>$category->id
        ]);
    }
}
