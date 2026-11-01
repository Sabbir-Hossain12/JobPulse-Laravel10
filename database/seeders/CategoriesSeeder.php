<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       JobCategory::create(['name'=>'Software Development']);
        JobCategory::create(['name'=>'Web Development']);
        JobCategory::create(['name'=>'Mobile App Development']);
        JobCategory::create(['name'=>'UI/UX Design']);
        JobCategory::create(['name'=>'Data Science']);
    }
}
