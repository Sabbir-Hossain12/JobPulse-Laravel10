<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj= new Admin();
        $obj->name="Admin";
        $obj->email="admin@admin.com";
        $obj->password=Hash::make('1234');
        $obj->role="SuperAdmin";
        $obj->save();


    }
}
