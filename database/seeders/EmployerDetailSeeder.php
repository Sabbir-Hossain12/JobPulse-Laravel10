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
        $employers = Employer::get();

        // Check if we have any employers
        if ($employers->count() == 0) {
            $this->command->info('No employers found, skipping employer details seeding.');
            return;
        }

        $data = [];

        // Create employer details records
        foreach ($employers as $employer) {
            $locations = [
                'Abuja, Federal Capital Territory',
                'Lagos, Lagos State',
                'Kano, Kano State',
                'Ibadan, Oyo State',
                'Kaduna, Kaduna State',
                'Port Harcourt, Rivers State',
                'Benin City, Edo State',
                'Maiduguri, Borno State',
                'Zaria, Kaduna State',
                'Katsina, Katsina State'
            ];

            $randomLocation = $locations[array_rand($locations)];

            // Determine employer type based on company name
            $employerType = 'Private';
            if (strpos(strtolower($employer->name), 'government') !== false ||
                strpos(strtolower($employer->name), 'state') !== false ||
                strpos(strtolower($employer->name), 'federal') !== false) {
                $employerType = 'Government';
            } elseif (strpos(strtolower($employer->name), 'ngo') !== false) {
                $employerType = 'NGO';
            }

            // Determine company size based on company name
            $companySize = 'Large';
            if (strpos(strtolower($employer->name), 'small') !== false ||
                strpos(strtolower($employer->name), 'micro') !== false) {
                $companySize = 'Small';
            } elseif (strpos(strtolower($employer->name), 'medium') !== false) {
                $companySize = 'Medium';
            }

            $data[] = [
                'employer_id' => $employer->id,
                'employer_details' => $this->generateEmployerDescription($employer->name),
                'location' => $randomLocation,
                'website_url' => 'www.' . strtolower(str_replace([' ', '(', ')'], ['', '-', '-'], $employer->name)) . '.com.ng',
                'employer_type' => $employerType,
                'company_size' => $companySize,
            ];
        }

        foreach ($data as $singleData) {
            EmployerDetail::create($singleData);
        }
    }

    private function generateEmployerDescription($companyName)
    {
        $descriptions = [
            'Leading organization in Nigeria with extensive experience in the industry.',
            'Well-established company committed to excellence and innovation.',
            'Trusted employer with a strong reputation in the Nigerian market.',
            'Growth-oriented business with focus on employee development.',
            'Industry leader with commitment to sustainable practices.',
            'Professional services provider with nationwide presence.',
            'Dynamic organization fostering innovation and creativity.',
            'Established enterprise with strong corporate governance.'
        ];

        $selectedDescription = $descriptions[array_rand($descriptions)];

        // Customize description based on company type
        if (strpos(strtolower($companyName), 'bank') !== false) {
            $selectedDescription = 'Leading financial institution in Nigeria with extensive branch network.';
        } elseif (strpos(strtolower($companyName), 'oil') !== false || strpos(strtolower($companyName), 'petroleum') !== false) {
            $selectedDescription = 'Major player in Nigeria\'s oil and gas sector with significant market share.';
        } elseif (strpos(strtolower($companyName), 'telecom') !== false || strpos(strtolower($companyName), 'mtn') !== false) {
            $selectedDescription = 'Premier telecommunications provider serving millions of customers across Nigeria.';
        } elseif (strpos(strtolower($companyName), 'cement') !== false) {
            $selectedDescription = 'Top cement manufacturer with state-of-the-art production facilities.';
        } elseif (strpos(strtolower($companyName), 'textile') !== false) {
            $selectedDescription = 'Traditional textile manufacturer contributing to Nigeria\'s industrial growth.';
        } elseif (strpos(strtolower($companyName), 'government') !== false) {
            $selectedDescription = 'Government agency responsible for public service delivery and administration.';
        }

        return $selectedDescription;
    }
}