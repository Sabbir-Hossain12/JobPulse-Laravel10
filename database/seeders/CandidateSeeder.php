<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CandidateProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nigerian names and locations
        $nigerianNames = [
            ['firstName' => 'Chinedu', 'lastName' => 'Okonkwo', 'gender' => 'Male'],
            ['firstName' => 'Aisha', 'lastName' => 'Abubakar', 'gender' => 'Female'],
            ['firstName' => 'Emeka', 'lastName' => 'Eze', 'gender' => 'Male'],
            ['firstName' => 'Fatima', 'lastName' => 'Bala', 'gender' => 'Female'],
            ['firstName' => 'Olumide', 'lastName' => 'Adebayo', 'gender' => 'Male'],
            ['firstName' => 'Khadija', 'lastName' => 'Umar', 'gender' => 'Female'],
            ['firstName' => 'Kemi', 'lastName' => 'Okafor', 'gender' => 'Female'],
            ['firstName' => 'Yusuf', 'lastName' => 'Adamu', 'gender' => 'Male'],
            ['firstName' => 'Adaora', 'lastName' => 'Nwosu', 'gender' => 'Female'],
            ['firstName' => 'Tunde', 'lastName' => 'Olatunji', 'gender' => 'Male'],
            ['firstName' => 'Zainab', 'lastName' => 'Mohammed', 'gender' => 'Female'],
            ['firstName' => 'Segun', 'lastName' => 'Balogun', 'gender' => 'Male'],
            ['firstName' => 'Halima', 'lastName' => 'Suleiman', 'gender' => 'Female'],
            ['firstName' => 'Chukwu', 'lastName' => 'Madu', 'gender' => 'Male'],
            ['firstName' => 'Binta', 'lastName' => 'Shehu', 'gender' => 'Female'],
            ['firstName' => 'Femi', 'lastName' => 'Ajayi', 'gender' => 'Male'],
            ['firstName' => 'Amina', 'lastName' => 'Auwalu', 'gender' => 'Female'],
            ['firstName' => 'Bright', 'lastName' => 'Iheanyi', 'gender' => 'Male'],
            ['firstName' => 'Maryam', 'lastName' => 'Yusuf', 'gender' => 'Female'],
            ['firstName' => 'Samuel', 'lastName' => 'Johnson', 'gender' => 'Male'],
            ['firstName' => 'Grace', 'lastName' => 'Williams', 'gender' => 'Female'],
            ['firstName' => 'Ahmad', 'lastName' => 'Aliyu', 'gender' => 'Male'],
            ['firstName' => 'Ngozi', 'lastName' => 'Ezeani', 'gender' => 'Female'],
            ['firstName' => 'Musa', 'lastName' => 'Tanko', 'gender' => 'Male'],
            ['firstName' => 'Blessing', 'lastName' => 'Okafor', 'gender' => 'Female'],
        ];

        $nigerianStates = [
            'Lagos', 'Kano', 'Rivers', 'Kaduna', 'Katsina', 'Edo', 'Ogun', 'Delta',
            'Oyo', 'Bauchi', 'Anambra', 'Cross River', 'Enugu', 'Akwa Ibom', 'Plateau',
            'Benue', 'Taraba', 'Jigawa', 'Imo', 'Osun', 'Kebbi', 'Sokoto', 'Bayelsa',
            'Nasarawa', 'Adamawa', 'Abia', 'Kwara', 'Gombe', 'Ondo', 'Yobe', 'Zamfara',
            'Ebonyi', 'Ekiti', 'Niger', 'Borno', 'Sokoto', 'FCT Abuja'
        ];

        $nigerianCities = [
            'Lagos', 'Ikeja', 'Surulere', 'Victoria Island', 'Kano', 'Kofar Ruwa', 'Dala',
            'Kaduna', 'Kurmi', 'Zaria', 'Port Harcourt', 'Diobu', 'Abuja', 'Garki',
            'Ibadan', 'Dugbe', 'Onireke', 'Katsina', 'Funtua', 'Jos', 'Bukuru',
            'Enugu', 'Ogui', 'Awkunanaw', 'Calabar', 'Ikot Ekpene', 'Uyo', 'Makurdi',
            'Yola', 'Gombe', 'Damaturu', 'Sokoto', 'Kebbi', 'Minna', 'Lafia', 'Bauchi',
            'Gombe', 'Jalingo', 'Owerri', 'Onitsha', 'Awka', 'Abakaliki', 'Asaba',
            'Warri', 'Effurun', 'Ikorodu', 'Badagry', 'Ijebu-Ode', 'Abeokuta', 'Iseyin',
            'Ogbomosho', 'Ilesha', 'Ila Orangun', 'Iwo', 'Modakeke', 'Ikirun', 'Efon-Alaaye',
            'Ado-Ekiti', 'Ikere-Ekiti', 'Ipoti', 'Iworoko', 'Owo', 'Ondo', 'Akure', 'Odigbo',
            'Oka-Akoko', 'Owo', 'Gboko', 'Otukpo', 'Makurdi', 'Keffi', 'Minna', 'Bida',
            'Lapai', 'Suleja', 'Zungeru', 'Kontagora', 'Mariga', 'Birnin Kebbi', 'Argungu',
            'Funtua', 'Katsina', 'Dutsin-Ma', 'Kafanchan', 'Kagoro', 'Makurdi', 'Gboko',
            'Kaltungo', 'Dutse', 'Hadejia', 'Jega', 'Kalgo', 'Koko-Besse', 'Mashi', 'Roni',
            'Gusau', 'Anka', 'Birnin Kudu', 'Dikwa', 'Askira-Uba', 'Biu', 'Chibok', 'Gwoza',
            'Konduga', 'Kukawa', 'Mafa', 'Magumeri', 'Marte', 'Ngala', 'Shani', 'Gashua',
            'Jakusko', 'Maiduguri', 'Nguru', 'Potiskum', 'Geidam', 'Guzamala', 'Gubio', 'Kaugama'
        ];

        foreach ($nigerianNames as $index => $nameInfo) {
            $fullName = $nameInfo['firstName'] . ' ' . $nameInfo['lastName'];
            $email = strtolower(Str::slug($nameInfo['firstName'])) . '.' .
                    strtolower(Str::slug($nameInfo['lastName'])) . '@gmail.com';

            $user = User::create([
                'name' => $fullName,
                'email' => $email,
                'password' => 'password',
                'email_verified_at' => now(),
            ]);

            // Create candidate profile
            $candidateProfile = CandidateProfile::create([
                'user_id' => $user->id,
                'phone' => '+234' . rand(7000000000, 7999999999),
                'address' => fake()->streetAddress() . ', ' . $nigerianCities[array_rand($nigerianCities)] . ', ' . $nigerianStates[array_rand($nigerianStates)],
                'bio' => fake()->paragraph(),
                'experience_level' => ['Entry Level', 'Mid Level', 'Senior Level', 'Executive'][array_rand(['Entry Level', 'Mid Level', 'Senior Level', 'Executive'])],
                'expected_salary' => rand(100000, 5000000) . ' NGN',
                'availability' => ['Immediately', 'Within 2 weeks', 'Within 1 month', 'Negotiable'][array_rand(['Immediately', 'Within 2 weeks', 'Within 1 month', 'Negotiable'])],
                'cv_path' => null, // In a real app, this would be the path to uploaded CV
                'profile_image' => null, // In a real app, this would be the path to uploaded image
                'date_of_birth' => fake()->date('Y-m-d', '-25 years'),
                'gender' => $nameInfo['gender'],
                'nationality' => 'Nigerian',
                'state_of_origin' => $nigerianStates[array_rand($nigerianStates)],
                'lga' => fake()->city(),
            ]);

            // Add some skills to the candidate
            $allSkills = [
                'PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Python', 'Django',
                'HTML', 'CSS', 'Tailwind CSS', 'MySQL', 'PostgreSQL', 'MongoDB',
                'AWS', 'Azure', 'Google Cloud', 'Docker', 'Git', 'Linux', 'SEO',
                'Digital Marketing', 'Content Writing', 'Graphic Design', 'UI/UX',
                'Project Management', 'Data Analysis', 'Machine Learning', 'AI',
                'Sales', 'Customer Service', 'Accounting', 'Finance', 'HR',
                'Business Development', 'Operations', 'Quality Assurance'
            ];

            // Create skills if they don't exist
            foreach ($allSkills as $skillName) {
                \App\Models\Skill::firstOrCreate(['name' => $skillName]);
            }

            // Select random skills for this candidate
            $selectedSkills = array_rand(array_flip($allSkills), rand(3, 8));
            foreach ($selectedSkills as $skillName) {
                $skill = \App\Models\Skill::where('name', $skillName)->first();
                if ($skill) {
                    $candidateProfile->skills()->attach($skill->id);
                }
            }
        }
    }
}
