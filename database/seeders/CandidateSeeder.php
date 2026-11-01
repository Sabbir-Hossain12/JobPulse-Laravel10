<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        for ($i=0;$i<20;$i++)
        {
            $candidate= new User();
            $candidate->name=fake()->name();
            $candidate->email=fake()->email();
            $candidate->password=Hash::make('1234');

            $candidate->save();
        }

    }
}
