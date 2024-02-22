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
//        $obj= new Employer();
//        $obj->name= "Employer";
//        $obj->email="employer@gmail.com";
//        $obj->password= Hash::make('1234');
//
//
//
//        $obj->save();

        $data=[
            [
                'name'=>'Samsung',
                'email'=>'samsung@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'LG',
                'email'=>'lg@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Toshiba',
                'email'=>'toshiba@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Panasonic',
                'email'=>'panasonic@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Hitachi',
                'email'=>'hitachi@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Singer',
                'email'=>'singer@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Corsair',
                'email'=>'corsair@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Beximco',
                'email'=>'beximco@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Bashundhara',
                'email'=>'bashundhara@gmail.com',
                'password'=>Hash::make('123123'),

            ],
            [
                'name'=>'Pran',
                'email'=>'pran@gmail.com',
                'password'=>Hash::make('123123'),

            ],



        ];






        foreach ($data as $singleData)
        {
            Employer::create($singleData);
        }
    }


}
