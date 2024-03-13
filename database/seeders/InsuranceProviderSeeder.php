<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\insuranceProvider;

class InsuranceProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InsuranceProvider::insert([
            [
           'name'=>'APA Insurance',
            'email'=>'info@apainsurance.org',
            'description'=>'Insuring Happiness',
            'logo'=>'/storage/assets/images/logos/Apa_Insurance_Logo.jpg',
            'created_at'=>now(),
            'updated_at'=>now()
        ]
        ]);
    }
}
