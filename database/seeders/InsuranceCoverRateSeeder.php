<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InsuranceCoverRate;

class InsuranceCoverRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InsuranceCoverRate::insert([
            [
            'insurance_cover_name'=>'Motor Private Comprehensive',
            'minimum_value'=> '0',
            'maximum_value'=> '1000000',
            'basic_rate'=> '6.0',
            'minimum_premium'=> '37500',
            'description'=>'Upto 1,000,000',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
        [
            'insurance_cover_name'=>'Motor Private Comprehensive',
            'minimum_value'=> '1000001',
            'maximum_value'=> '1500000',
            'basic_rate'=> '5.0',
            'minimum_premium'=> '60000',
            'description'=>'1,000,001 - 1,500,000',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
        [
            'insurance_cover_name'=>'Motor Private Comprehensive',
            'minimum_value'=> '1500001',
            'maximum_value'=> '2500000',
            'basic_rate'=> '4.0',
            'minimum_premium'=> '75000',
            'description'=> ' 1,500,001 - 2,500,000',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
        [
            'insurance_cover_name'=>'Motor Private Comprehensive',
            'minimum_value'=> '2500001',
            'maximum_value'=> '5000000',
            'basic_rate'=> '3.5',
            'minimum_premium'=> '100000',
            'description'=>'2,500,001 - 5,000,000',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ],
        [
            'insurance_cover_name'=>'Motor Private Comprehensive',
            'minimum_value'=> '5000001',
            'maximum_value'=> '15000000',
            'basic_rate'=> '3.0',
            'minimum_premium'=> '175000',
            'description'=>'Above 5,000,000',
            'insurance_cover_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now()
        ]

       ] );
    }
}
