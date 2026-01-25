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
        $data = [
            [
                'name' => 'Nigeria National Petroleum Corporation (NNPC)',
                'email' => 'hr@nnpc.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Dangote Group',
                'email' => 'careers@dangote.com',
                'password' => 'password',
            ],
            [
                'name' => 'Aliko Dangote Cement Plc',
                'email' => 'jobs@dangotecement.com',
                'password' => 'password',
            ],
            [
                'name' => 'Nigeria Bottling Company',
                'email' => 'recruitment@nbc.com.ng',
                'password' => 'password',
            ],
            [
                'name' => 'First Bank of Nigeria',
                'email' => 'careers@firstbanknigeria.com',
                'password' => 'password',
            ],
            [
                'name' => 'Kano State Government',
                'email' => 'hr@kanostate.gov.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Emirates Steel Industries',
                'email' => 'jobs@emiratessteel.com.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Kano Textile Mills',
                'email' => 'hr@kanotextiles.com',
                'password' => 'password',
            ],
            [
                'name' => 'Nasarawa Agro Industry',
                'email' => 'careers@nasarawaagro.com',
                'password' => 'password',
            ],
            [
                'name' => 'Katsina Leather and Allied Products',
                'email' => 'jobs@katsinaleather.com',
                'password' => 'password',
            ],
            [
                'name' => 'Nigeria Liquefied Natural Gas (NLNG)',
                'email' => 'careers@nlng.com.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Access Bank Plc',
                'email' => 'careers@accessbankplc.com',
                'password' => 'password',
            ],
            [
                'name' => 'MTN Nigeria',
                'email' => 'careers@mtn.com.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Nestle Nigeria',
                'email' => 'careers@nestle.com.ng',
                'password' => 'password',
            ],
            [
                'name' => 'Unilever Nigeria',
                'email' => 'careers@unilever.com.ng',
                'password' => 'password',
            ],
        ];

        foreach ($data as $singleData) {
            Employer::create($singleData);
        }
    }
}
