<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InsuranceCover;

class InsuranceCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InsuranceCover::insert([
            [
           'insurance_provider_name'=> 'APA Insurance',
            'name'=>'Motor Private Comprehensive',
            'insurance_provider_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
        [
            'insurance_provider_name'=> 'APA Insurance',
            'name'=>'Motor Commercial Comprehensive',
            'insurance_provider_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ]
        ]);
    }
}
