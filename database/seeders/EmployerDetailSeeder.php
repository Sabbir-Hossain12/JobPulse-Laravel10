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
                'employer_id'=>7,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>8,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>9,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>10,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>11,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>12,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>13,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>14,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>15,
                'employer_details'=>'good company',
                'location'=>'Dhaka,Bashundhara',
                'website_url'=>'www.samsung',
                'employer_type'=>'Government',
                'company_size'=>'Small',

            ],
            [
                'employer_id'=>16,
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
