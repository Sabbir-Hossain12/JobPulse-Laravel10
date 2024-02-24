<?php

namespace Database\Seeders;

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
        $data=[

            [
                'employer_id'=>17,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>18,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>19,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>20,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>21,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>22,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>23,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>24,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>25,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>26,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],



        ];

        foreach ($data as $singleData)
        {
            EmployerDetail::create($singleData);
        }
    }
}
