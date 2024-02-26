<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JobTagRelationSeeder::class);
//        $this->call(JobSeeder::class);
//        $this->call(JobTagSeeder::class);
//        $this->call(CategoriesSeeder::class);
//        $this->call(CandidateSeeder::class);
//      $this->call(AdminSeeder::class);
//       $this->call(EmployerSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
