<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       Skill::create(['name' => 'PHP']);
        Skill ::create(['name' => 'JS']);
        Skill ::create(['name' => 'Communication']);
        Skill::create(['name' => 'Collaboration']);
        Skill::create(['name' => 'git/gitHub']);

    }


}
