<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj= new Employer();
        $obj->name= "Employer";
        $obj->email="employer@gmail.com";
        $obj->password= Hash::make('1234');
        $obj->save();
    }
}
