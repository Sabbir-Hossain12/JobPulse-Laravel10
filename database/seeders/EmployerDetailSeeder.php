<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\EmployerDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id=Employer::get();
        $data=[

            [
                'employer_id'=>rand($id[0]->id,$id[9]->id),
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],
//            [
//                'employer_id'=>Employer::random()->id,
//                'employer_details'=>'good company',
//                'location'=>'Dhaka,Bashundhara',
//                'website_url'=>'www.samsung',
//                'employer_type'=>'Government',
//                'company_size'=>'Small',
//
//            ],



        ];

        foreach ($data as $singleData)
        {
            EmployerDetail::create($singleData);
        }
    }
}
