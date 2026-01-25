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
        $skills = [
            'PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Python', 'Django',
            'HTML', 'CSS', 'Tailwind CSS', 'MySQL', 'PostgreSQL', 'MongoDB',
            'AWS', 'Azure', 'Google Cloud', 'Docker', 'Git', 'Linux', 'SEO',
            'Digital Marketing', 'Content Writing', 'Graphic Design', 'UI/UX',
            'Project Management', 'Data Analysis', 'Machine Learning', 'AI',
            'Sales', 'Customer Service', 'Accounting', 'Finance', 'HR',
            'Business Development', 'Operations', 'Quality Assurance',
            'JS', 'Communication', 'Collaboration', 'git/gitHub' // Original skills
        ];

        foreach ($skills as $skillName) {
            Skill::firstOrCreate(['name' => $skillName]);
        }
    }
}
