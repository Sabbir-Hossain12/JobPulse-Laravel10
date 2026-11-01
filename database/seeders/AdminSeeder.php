<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Database\Seeders\RoleSeeder;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadminRole = new Role();
        $superadminRole->role_name = 'superadmin';
        $superadminRole->save();

        $managerRole = new Role();
        $managerRole->role_name = 'manager';
        $managerRole->save();

        $editorRole = new Role();
        $editorRole->role_name = 'editor';
        $editorRole->save();

        $obj= new Admin();
        $obj->name="Admin";
        $obj->email="admin@admin.com";
        $obj->status='1';
        $obj->password=Hash::make('1234');
        $obj->role_id= $superadminRole->id;
        $obj->save();

        $obj= new Admin();
        $obj->name="editor";
        $obj->email="editor@admin.com";
        $obj->status='0';
        $obj->password=Hash::make('1234');
        $obj->role_id= $editorRole->id;
        $obj->save();

        $obj= new Admin();
        $obj->name="manager";
        $obj->email="manager@admin.com";
        $obj->status='0';
        $obj->password=Hash::make('1234');
        $obj->role_id= $managerRole->id;
        $obj->save();

    }
}
