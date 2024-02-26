<?php

namespace Database\Seeders;

use App\Models\JobTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobTag::create(['name'=>'Remote']);
        JobTag::create(['name'=>'PHP']);
        JobTag::create(['name'=>'Laravel']);
        JobTag::create(['name'=>'VueJS']);
        JobTag::create(['name'=>'MySql']);
    }
}
