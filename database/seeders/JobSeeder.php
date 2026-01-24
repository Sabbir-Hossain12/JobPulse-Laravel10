<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\JobCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employers = Employer::all();
        $categories = JobCategory::all();

        // Define Nigeria/Kano-focused job titles by category
        $jobTitlesByCategory = [
            'Oil and Gas' => [
                'Petroleum Engineer',
                'Drilling Supervisor',
                'Reservoir Engineer',
                'Gas Plant Operator',
                'Pipeline Inspector',
                'Safety Officer',
                'Geologist',
                'Production Manager'
            ],
            'Banking and Finance' => [
                'Relationship Manager',
                'Credit Analyst',
                'Loan Officer',
                'Branch Manager',
                'Investment Advisor',
                'Risk Analyst',
                'Compliance Officer',
                'Financial Planner'
            ],
            'Telecommunications' => [
                'Network Engineer',
                'System Administrator',
                'IT Support Specialist',
                'Telecom Technician',
                'Cybersecurity Analyst',
                'Data Analyst',
                'Software Developer',
                'Infrastructure Manager'
            ],
            'Agriculture' => [
                'Agricultural Extension Officer',
                'Farm Manager',
                'Agronomist',
                'Livestock Specialist',
                'Agricultural Economist',
                'Crop Production Manager',
                'Soil Scientist',
                'Irrigation Engineer'
            ],
            'Manufacturing' => [
                'Production Manager',
                'Quality Control Inspector',
                'Maintenance Engineer',
                'Plant Manager',
                'Supply Chain Coordinator',
                'Process Engineer',
                'Safety Supervisor',
                'Operations Manager'
            ],
            'Healthcare' => [
                'Medical Doctor',
                'Nurse',
                'Pharmacist',
                'Laboratory Technician',
                'Medical Laboratory Scientist',
                'Radiographer',
                'Physiotherapist',
                'Community Health Worker'
            ],
            'Education' => [
                'University Lecturer',
                'Secondary School Teacher',
                'Primary School Teacher',
                'Education Administrator',
                'Curriculum Developer',
                'School Principal',
                'Library Assistant',
                'Guidance Counselor'
            ],
            'Information Technology' => [
                'Software Developer',
                'Systems Analyst',
                'Database Administrator',
                'Web Developer',
                'Cybersecurity Specialist',
                'DevOps Engineer',
                'UI/UX Designer',
                'IT Project Manager'
            ],
            'Construction' => [
                'Civil Engineer',
                'Site Manager',
                'Architect',
                'Quantity Surveyor',
                'Building Inspector',
                'Project Manager',
                'Structural Engineer',
                'Labourer'
            ],
            'Mining' => [
                'Mining Engineer',
                'Geologist',
                'Mine Supervisor',
                'Environmental Officer',
                'Safety Inspector',
                'Metallurgical Engineer',
                'Surveyor',
                'Equipment Operator'
            ],
            'Power and Energy' => [
                'Electrical Engineer',
                'Power System Operator',
                'Energy Consultant',
                'Renewable Energy Technician',
                'Grid Maintenance Engineer',
                'Energy Auditor',
                'Solar Panel Installer',
                'Power Plant Operator'
            ],
            'Transportation' => [
                'Driver',
                'Logistics Coordinator',
                'Fleet Manager',
                'Transport Supervisor',
                'Traffic Controller',
                'Mechanic',
                'Dispatcher',
                'Warehouse Manager'
            ],
            'Logistics' => [
                'Logistics Manager',
                'Supply Chain Analyst',
                'Warehouse Supervisor',
                'Import/Export Coordinator',
                'Courier',
                'Inventory Manager',
                'Freight Forwarder',
                'Distribution Manager'
            ],
            'Media and Entertainment' => [
                'Journalist',
                'TV Producer',
                'Radio Presenter',
                'Video Editor',
                'Social Media Manager',
                'Content Creator',
                'Public Relations Officer',
                'Event Planner'
            ],
            'Real Estate' => [
                'Real Estate Agent',
                'Property Manager',
                'Valuer',
                'Estate Surveyor',
                'Facility Manager',
                'Leasing Consultant',
                'Property Developer',
                'Real Estate Lawyer'
            ],
            'Legal Services' => [
                'Lawyer',
                'Legal Counsel',
                'Paralegal',
                'Court Clerk',
                'Legal Secretary',
                'Litigation Specialist',
                'Corporate Attorney',
                'Notary Public'
            ],
            'Government' => [
                'Civil Servant',
                'Policy Analyst',
                'Administrative Officer',
                'Tax Inspector',
                'Customs Officer',
                'Immigration Officer',
                'Auditor',
                'Statistician'
            ],
            'NGO/Development' => [
                'Program Manager',
                'Field Officer',
                'Project Coordinator',
                'Research Analyst',
                'Community Mobilizer',
                'Grant Writer',
                'Monitoring Officer',
                'Advocacy Specialist'
            ],
            'Textile and Garment' => [
                'Fashion Designer',
                'Textile Engineer',
                'Pattern Maker',
                'Garment Cutter',
                'Quality Inspector',
                'Production Supervisor',
                'Sewing Machine Operator',
                'Merchandiser'
            ],
            'Automotive' => [
                'Automotive Technician',
                'Mechanical Engineer',
                'Auto Electrician',
                'Bodywork Specialist',
                'Parts Manager',
                'Service Advisor',
                'Auto Mechanic',
                'Vehicle Inspector'
            ],
            'Pharmaceuticals' => [
                'Clinical Research Associate',
                'Pharmaceutical Sales Rep',
                'Quality Assurance Manager',
                'Regulatory Affairs Specialist',
                'Drug Safety Associate',
                'Pharmaceutical Technician',
                'Product Manager',
                'Medical Science Liaison'
            ],
            'Insurance' => [
                'Insurance Agent',
                'Claims Adjuster',
                'Underwriter',
                'Risk Assessor',
                'Actuary',
                'Insurance Broker',
                'Loss Prevention Specialist',
                'Customer Service Representative'
            ],
            'Hospitality and Tourism' => [
                'Hotel Manager',
                'Tour Guide',
                'Travel Consultant',
                'Restaurant Manager',
                'Chef',
                'Housekeeping Supervisor',
                'Event Coordinator',
                'Concierge'
            ],
            'Retail' => [
                'Store Manager',
                'Sales Associate',
                'Cashier',
                'Visual Merchandiser',
                'Inventory Specialist',
                'Customer Service Representative',
                'Buyer',
                'Loss Prevention Officer'
            ],
            'FMCG (Fast Moving Consumer Goods)' => [
                'Sales Representative',
                'Brand Manager',
                'Trade Marketing Manager',
                'Category Manager',
                'Market Research Analyst',
                'Promoter',
                'Route Salesperson',
                'Key Account Manager'
            ]
        ];

        foreach ($employers as $employer) {
            // Randomly decide how many jobs this employer will have (between 2-5)
            $numJobs = rand(2, 5);

            for ($i = 0; $i < $numJobs; $i++) {
                // Select a random category
                $category = $categories->random();

                // Get appropriate job title based on category
                $categoryName = $category->name;
                $availableTitles = $jobTitlesByCategory[$categoryName] ?? ['General Worker', 'Assistant', 'Officer', 'Specialist'];
                $jobTitle = $availableTitles[array_rand($availableTitles)];

                // Generate Nigeria-specific locations
                $nigeriaLocations = [
                    'Lagos, Lagos State',
                    'Abuja, FCT',
                    'Kano, Kano State',
                    'Ibadan, Oyo State',
                    'Port Harcourt, Rivers State',
                    'Kaduna, Kaduna State',
                    'Benin City, Edo State',
                    'Maiduguri, Borno State',
                    'Zaria, Kaduna State',
                    'Aba, Abia State',
                    'Onitsha, Anambra State',
                    'Jos, Plateau State',
                    'Ilorin, Kwara State',
                    'Oyo, Oyo State',
                    'Ado-Ekiti, Ekiti State'
                ];

                // Generate salary ranges based on job category
                $salaryRanges = [
                    'Oil and Gas' => '250,000 - 800,000 NGN',
                    'Banking and Finance' => '180,000 - 600,000 NGN',
                    'Telecommunications' => '150,000 - 450,000 NGN',
                    'Agriculture' => '100,000 - 300,000 NGN',
                    'Manufacturing' => '120,000 - 350,000 NGN',
                    'Healthcare' => '200,000 - 700,000 NGN',
                    'Education' => '100,000 - 400,000 NGN',
                    'Information Technology' => '180,000 - 500,000 NGN',
                    'Construction' => '120,000 - 350,000 NGN',
                    'Mining' => '220,000 - 600,000 NGN',
                    'Power and Energy' => '200,000 - 550,000 NGN',
                    'Transportation' => '100,000 - 250,000 NGN',
                    'Logistics' => '120,000 - 300,000 NGN',
                    'Media and Entertainment' => '100,000 - 350,000 NGN',
                    'Real Estate' => '150,000 - 450,000 NGN',
                    'Legal Services' => '250,000 - 800,000 NGN',
                    'Government' => '120,000 - 400,000 NGN',
                    'NGO/Development' => '120,000 - 350,000 NGN',
                    'Textile and Garment' => '80,000 - 200,000 NGN',
                    'Automotive' => '120,000 - 300,000 NGN',
                    'Pharmaceuticals' => '180,000 - 500,000 NGN',
                    'Insurance' => '150,000 - 400,000 NGN',
                    'Hospitality and Tourism' => '100,000 - 250,000 NGN',
                    'Retail' => '80,000 - 200,000 NGN',
                    'FMCG (Fast Moving Consumer Goods)' => '120,000 - 350,000 NGN'
                ];

                $salaryRange = $salaryRanges[$categoryName] ?? '100,000 - 300,000 NGN';

                Job::create([
                    'title' => $jobTitle,
                    'description' => fake()->paragraph(3),
                    'responsibilities' => fake()->paragraph(2),
                    'requirement' => fake()->paragraph(2),
                    'location' => $nigeriaLocations[array_rand($nigeriaLocations)],
                    'salary_range' => $salaryRange,
                    'deadline' => Carbon::now()->addDays(rand(14, 45)), // Deadline between 2-6 weeks
                    'employer_id' => $employer->id,
                    'category_id' => $category->id
                ]);
            }
        }
    }
}
