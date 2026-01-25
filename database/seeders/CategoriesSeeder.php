<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Oil and Gas',
            'Banking and Finance',
            'Telecommunications',
            'Agriculture',
            'Manufacturing',
            'Healthcare',
            'Education',
            'Information Technology',
            'Construction',
            'Mining',
            'Power and Energy',
            'Transportation',
            'Logistics',
            'Media and Entertainment',
            'Real Estate',
            'Legal Services',
            'Government',
            'NGO/Development',
            'Textile and Garment',
            'Automotive',
            'Pharmaceuticals',
            'Insurance',
            'Hospitality and Tourism',
            'Retail',
            'FMCG (Fast Moving Consumer Goods)'
        ];

        foreach ($categories as $category) {
            JobCategory::create(['name' => $category]);
        }
    }
}
